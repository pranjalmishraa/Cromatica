<?php
if($_POST)
{
require('constant.php');
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $content   = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($user_phone)) {
		$empty[] = "<b>Phone Number</b>";
	}	
	if(empty($content)) {
		$empty[] = "<b>Comments</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {
		
		require('component/recaptcha/src/autoload.php');		
		
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		  if (!$resp->isSuccess()) {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);				
		  }	
	}
	
	$toEmail = "member@testdomain.com";
	$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
        $mailBody = "User Name: " . $user_name . "\n";
	$mailBody .= "User Email: " . $user_email . "\n";
	$mailBody .= "Phone: " . $user_phone . "\n";
	$mailBody .= "Content: " . $content . "\n";
	if (mail($toEmail, "Contact Mail", $mailBody, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the comments. We will get back to you shortly.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
	    die($output);
	}
}
?>


<form id="frmContact" action="" method="POST" novalidate="novalidate">
    <div class="label">Name:</div>
    <div class="field">
        <input type="text" id="name" name="name"
            placeholder="enter your name here"
            title="Please enter your name" class="required"
            aria-required="true" required>
    </div>
    <div class="label">Email:</div>
    <div class="field">
        <input type="text" id="email" name="email"
            placeholder="enter your email address here"
            title="Please enter your email address"
            class="required email" aria-required="true" required>
    </div>
    <div class="label">Phone Number:</div>
    <div class="field">
        <input type="text" id="phone" name="phone"
            placeholder="enter your phone number here"
            title="Please enter your phone number"
            class="required phone" aria-required="true" required>
    </div>
    <div class="label">Comments:</div>
    <div class="field">
        <textarea id="comment-content" name="content"
            placeholder="enter your comments here"></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="6LcvcRodAAAAAPHwIUF8-tc-jPEPG7grupQ-TaTu"></div>
    <div id="mail-status"></div>
    <button type="Submit" id="send-message" style="clear: both;">Send
        Message</button>
</form>

<?php
error_reporting(-1);
$to = "$email";
$to1 = "info@cromatica.in,ashirwadtech@yahoo.co.uk,nithinphilip9@yahoo.com"
$subject = "Campaign enquiry";

$message =  '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CROMATICA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<style type="text/css">
		a[x-apple-data-detectors] {color: inherit !important;}
	</style>

</head>
<body style="margin: 0; padding: 0;">
	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td style="padding: 20px 0 30px 0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
	<tr>
		<td align="center" bgcolor="#000000" style="padding: 40px 0 30px 0;">
			<img src="https://erp.ashirwadtech.com/files/cromaticawhite.png" alt="Cromatica stainless steel and steel modular kitchen, wardrobe, cladding and jali" width="400" height="38" style="display: block;" />
		</td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
				<tr>
					<td style="color: #153643; font-family: Arial, sans-serif;">
					
					
					
						<h1 style="font-size: 24px; margin: 0;"> 
						
						
						
<!--  Update Salutation paragraph from here --> 	

						<div>Hi&nbsp;'.$name.',</div>
			
<!--  Update Salutation paragraph upto here --> 				
			
			</h1>
		  




			
			<tr>
					<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
						
					<!--  Update paragraph from here --> 	
					<!--  retain "<p style="margin: 0;">" and "</p>" at the begining and end of sentence --> 	
					
					<p style="margin: 0;">
					<div><div style="margin-top:5px;"> &emsp;

Thank you for your interest in our Steel Interior products.
<br></br>
Our client engagement team will reach out to you within 1 working day.
<br></br>
In case you are unable to get the help you need in the time that you expect, please feel free to contact us on <b>+91 76187 78060</b> or drop a mail to <b>info@cromatica.in</b>.
</div></div>
					</p>
					
				
					
					<!--  Update paragraph upto here --> 		
					</td>
				</tr>
			
			


					</td>
				</tr>
				
					
						

				
					
				
					   
	
	<tr>
				<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 10px 0 20px 0;">
						<p style="margin: 0;"><div style="margin-top:5px;">Warm Regards,</div>
<div><b>Cromatica</b></div>

</p>
					</td>
				</tr>  
  
  
			</table>
  
   
  
  
		</td>
	</tr>
	<tr>
	
	
 


			
	
	
	
	
	
	
		<td bgcolor="#000000" style="padding: 30px 30px;">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
				<tr>
					<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
		   
			
						<p style="margin: 0;">CROMATICA &reg;, Copyright 2021<br/>
					
					</td>
		   
					<td align="right">
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
							<tr>
								<td>
				  
								<a href="http://www.instagram.com/cromaticazone">
										<img src="https://erp.ashirwadtech.com/files/instagram.png" alt="Instagram." width="38" height="38" style="display: block;" border="0" />
				 
					 </a>
								</td>
							
			   <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
				
								<td>
									<a href="http://www.facebook.com/cromaticazone">
										<img src="https://erp.ashirwadtech.com/files/Facebook.png" alt="Facebook." width="38" height="38" style="display: block;" border="0" />
				 
					 </a>
				  
				  
				  
			   
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

			</td>
		</tr>
	</table>
</body>
</html>'
   ;
   $html1='Please take action on the online enquiry received from cromatica website with the below details :<br>
   Home type :  '.$prop.'<BR>
   Name : '.$name.'<BR>
   Mobile_no: '.$number.' <BR>
   Email Id: '.$email.'<BR>
   
   ';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <lead_notifications@cromatica.in>' . "\r\n";
$headers .= 'Cc: lead_notifications@cromatica.in' . "\r\n";

$mai = mail($to,$subject,$message,$headers);
$mai = mail($to1,$subject,$html1,$headers);
if($mai){
	$arr=json_encode(array(
		"phone"=>"91xxxxxxxxxx",
		"body"=>"https://upload.wikimedia.org/wikipedia/ru/3/33/NatureCover2001.jpg",
		"filename"=>"NatureCover2001.jpg"
	));

	$no = $_SESSION["number"];
	$nam = $_SESSION["name"];
	$wmessage = "Hi '$nam',<BR>

	Thank you for your interest in our Steel Interior products.<BR>
	
	Our client engagement team will reach out to you within 1 working day.<BR>
	
	In case you are unable to get the help you need in the time that you expect, please feel free to contact us on +91 7618778060 or drop a mail to info@cromatica.in<BR><BR>
	
	Warm regards<BR>
	CROMATICA";

	$wmessage1='Please take action on the online enquiry received from cromatica website with the below details :<br>
	Home type :  '.$prop.'<BR>
	Name : '.$name.'<BR>
	Mobile_no: '.$number.' <BR>
	Email Id: '.$email.'<BR>
	
	';
	$url="https://panel.rapiwha.com/send_message.php?apikey=P21HLV7E1925BA6ERF4D&number=91$no%20&text=$wmessage ";
	$url="https://panel.rapiwha.com/send_message.php?apikey=P21HLV7E1925BA6ERF4D&number=919448331239%20&text=$wmessage1 ";
	$url="https://panel.rapiwha.com/send_message.php?apikey=P21HLV7E1925BA6ERF4D&number=917618778063%20&text=$wmessage1 ";
	$url="https://panel.rapiwha.com/send_message.php?apikey=P21HLV7E1925BA6ERF4D&number=919972146391%20&text=$wmessage1 ";
	
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array(
		'Content-type:application/json',
		'Content-length:'.strlen($arr)
	));
	$result=curl_exec($ch);
	curl_close($ch);

	// exit(header('Location: index.php?mailStatus=true'));

	?>
	<script> location.replace("index.html?mailStatus=true"); </script>
 <script>
		// window.location.href = 'index.php';
		// alert("your form submited !!");

	</script>
	<?php 
}
}
else{
	echo "no";
}
?>
<?php
/*
$arr=json_encode(array(
	"phone"=>"91xxxxxxxxxx",
	"body"=>"Hello Vishal"
));
$url="https://eu16.chat-api.com/instance98575/message?token=i7480emwmb3l1xzh";
*/
$arr=json_encode(array(
	"phone"=>"91xxxxxxxxxx",
	"body"=>"https://upload.wikimedia.org/wikipedia/ru/3/33/NatureCover2001.jpg",
	"filename"=>"NatureCover2001.jpg"
));

$no=919302812511;
$url="https://panel.rapiwha.com/send_message.php?apikey=P21HLV7E1925BA6ERF4D&number=$no%20&text=MyText1";

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
echo $result;
?>
<?php

	$phone=$_POST['phone'];
	$otp="";
    $i=1;
    while($i<=4)
    {
    $randomNumber=mt_rand(1,9);
    $otp=$otp.$randomNumber;
    $i++;
    }
	$username = "ashishchandwani21@gmail.com";
 	$hash = "a6709128671121e26c9e30291a2fce1af01597903b245aba24f946833912cdcd";
	$test = "0";
    $sender = "TXTLCL"; // This is who the message appears to be from.
	$ch = curl_init();
	$msgtxt="Your OTP for Digital Identity Platform is".$otp;
	$message = urlencode($msgtxt);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$phone."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	if(empty ($buffer))
	{

	}
	else
	{ 
	$result ="Success";
	}
	$responseArray=array($result,$otp);
	echo json_encode($responseArray);

?>

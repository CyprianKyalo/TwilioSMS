<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
session_start();

if(isset($_POST['mobile']) && isset($_POST['msg'])){
	//twilio
	$sid = 'AC4db1d279c3d1da7c2ef6c3c44f0c09e4';
	$token = '82f630791f4f45b0b1ced03a26200ca0';

	$client = new Client($sid, $token);
	$message = $client->messages->create(
			$_POST['mobile'], array(
				'from' => '+18126153411',
				'body' => $_POST['msg']
			)
	);

	if($message->sid){
		$_SESSION['msg'] = "Message sent successfully";
	}else{
		$_SESSION['msg'] = "Unable to send the message";
	}
}


?>

<h2>Sending SMS using twilio API</h2>

<form action="" method="POST">
	<p style="color: brown"><?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg']; unset($_SESSION['msg']); echo "<br>";}?></p>
	Enter Mobile:<br>
	<input type="text" name="mobile" placeholder="Mobile Number"><br><br>
	Message:<br>
	<textarea placeholder="Message" name="msg"></textarea><br><br>
	<input type="submit" name="" value="Send">
</form>
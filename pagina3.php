<?php  

if (isset($_POST['submit'])) {
	$name = $_POST['Name'];
	$mailFrom = $_POST['Email'];
	$phone = $_POST['Phone'];
	$subject = $_POST['Subject'];
	$message = $_POST['Message'];

	$mailTo = "a.vanmierlo@ziggo.nl";
	$headers = "From: ".$mailFrom;
	$txt = "you have recieved an email from".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("location:pagina3.html?mailsend");
	

}

?>
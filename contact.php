<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Website Contact Form';
    $to = 'me@brianbrennan.com';
    $subject = 'Site Message';

    $body = "From: $name\n Email: $email\n Message:\n $message";
?>

<?php 
	if($_POST['submit']){

		if (mail ($to, $subject, $body, $from)) { 
        	echo '<p>Your message has been sent!</p>';
    	} else { 
        	echo '<p>Something went wrong, go back and try again!</p>'; 
    	}
	} 
?>
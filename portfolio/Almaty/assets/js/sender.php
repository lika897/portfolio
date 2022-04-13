<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $dop = $_POST['dop'];

	$to = "anzhelika89@ukr.net"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта $dop";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Форма: $dop"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

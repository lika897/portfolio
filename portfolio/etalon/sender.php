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

	if(mail($_POST['name'],'тестовый заголовок письма',$_POST['phone'],'Content-type: text/html; charset=utf-8')){
    echo 'Сообщение отправлено!';
}
else{
    echo 'Ошибка отправки сообщения.';
}

?>

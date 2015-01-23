<?php 
require_once("class.phpmailer.php");

$status= "";

if($_POST['submit']) {
	$_POST['fieldname'] =  substr(htmlspecialchars(trim($_POST['fieldname'])), 0, 30); 
	$_POST['fieldphones'] =  substr(htmlspecialchars(trim($_POST['fieldphones'])), 0, 30); 
	$_POST['fieldemail'] =  substr(htmlspecialchars(trim($_POST['fieldemail'])), 0, 30); 
	$_POST['from'] =  substr(htmlspecialchars(trim($_POST['from'])), 0, 50); 
	$_POST['ref'] =  substr(htmlspecialchars(trim($_POST['ref'])), 0, 100); 
	$_POST['user'] =  substr(htmlspecialchars(trim($_POST['user'])), 0, 100); 
	
	$mess = ' 
		Имя отправителя:'.$_POST['fieldname'].' 
		Контактный телефон:'.$_POST['fieldphones'].' 
		Контактный email:'.$_POST['fieldemail'].' 
		откуда пришел:'.$_POST['from'].' 
		запрос:'.$_POST['ref'].'
		данные:'.$_POST['user']; 
         
        // $to - кому отправляем 
        $to = 'behappyhappybee@gmail.com';
				
		$theMailer = new phpmailer;
		$theMailer->From = "4event.kz";
		$theMailer->FromName = "4event.kz";
		$theMailer->Subject = "Заявка на елку";
		$theMailer->CharSet='utf-8';
		$theMailer->Body = $mess;
		$theMailer->AddAddress($to);

		if (!$theMailer->Send()) {
			$status = "Ошибка.<br />Заявка не отправлена. Попробуйте еще раз<br /><a href='../index.php'>Вернуться назад</a>";
		} else {
			$status = "Заявка успешно отправлена.<br />В ближайшее время наши менеджеры свяжутся с Вами!<br /><a href='../index.php'>Вернуться назад</a>";
		}

};
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Мастер-класс по ораторскому мастерству Виталия Бурдина</title>
		<link rel="stylesheet" href="../css/main.css" type="text/css" />
	</head>
	<body>
		<div class="order">
			<h2><?php echo $status; ?></h2>
		</div>
	</body>
</html>
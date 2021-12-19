<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
<?
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

$arUserInfo = array("name"=>$_REQUEST['user_name'], $_REQUEST['user_second_name'],$_REQUEST['user_last_name'], $_REQUEST['user_address']);

$strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>

	<form action="" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br>

		<strong>Ваш адрес (город, улица, дом, квартира)<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address" id="user_address" value=""><br>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
<div id="result">
	<?=$strUserInfo?>
</div>
</body>
</html>
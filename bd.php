<?php
$server = "localhost";//Сервер
$user = "root";//Пользователь
$password = "";//Пароль
$bd = "lessons";//База данных

$con = mysqli_connect($server, $user, $password, $bd);
if($con){
	echo "";
}else{
	echo "Ошибка соединения с базой!";
}
?>
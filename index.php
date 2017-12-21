<?php
include('bd.php');//Подключении файла
?>

<?php
$result = $con->query("SELECT * FROM `users`");
	while($row = $result->fetch_assoc()){
		echo  "<table border='1'><th>".$row['id']."</th>";
		echo  "<th>".$row['name']."</th></table>";
	}

?>

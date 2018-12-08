<?php
$dsn = "mysql:dbname=blog;host=127.0.0.1;charset=utf8";
$dbuser = "root";
$dbpass = "";

try {
	
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
} catch (PDOException $e) {
	
	echo "Falha na conexão: ".$e->getMessage();
}

?>
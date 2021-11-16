<?php 
$servidor="localhost";
$user="root";
$senha="";
$db="evento";

$db = mysqli_connect($servidor, $user, $senha, $db); 

if ($db->connect_error) {
	echo "conexao erro";
}else{
	echo "conexao_ok";
}
?>
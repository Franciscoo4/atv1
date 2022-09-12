<?php 
$Valor = $_GET['id'];
$Receber = file("Cadastro\ $Valor");

$titulo = trim($Valor,".txt");

for ($i=0; $i < count($Receber) ; $i++) { 
	echo $Receber[$i];
}

 ?>
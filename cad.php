<?php 
extract($_POST);
$arquivo = "$id.txt";
$file = fopen("Cadastro\ $arquivo", 'w+');
$dados = "$id <br> $nome <br> $cargo <br> $salario <br> $dep";

fwrite($file,$dados);
fclose($file);


$pasta = scandir('Cadastro');
for ($i=0; $i < count($pasta); $i++) { 
	if ($pasta[$i] == "." || $pasta[$i] == "..") {
		echo "";
		}else {
			$id2 = trim($pasta[$i]); 
			echo "<li> <a href='read.php?id=$id2'> $pasta[$i] </a> </li>";
		}
		
	}

?>













 ?>

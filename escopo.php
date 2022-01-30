<?php

//declaracao da variavel global
$nome = "Luciano";

///////////////////////////////////////////

//funcao teste1
function teste1() {

//chamando variavel global na funcao teste1	
	global $nome;
	echo $nome." = primeiro nome";
	echo "<br>";
}

///////////////////////////////////////////

//funcao teste2
function teste2() {
	$nome = "Santos";
	echo $nome." = sobrenome";
}

teste1();

teste2();

?>
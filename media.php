<?php 

$nome = !empty($_GET['nomeAluno']) ? $_GET['nomeAluno'] : 0;
$nota1 = !empty($_GET['nota1']) ? $_GET['nota1'] : 0;
$nota2 = !empty($_GET['nota2']) ? $_GET['nota2'] : 0;
$nota3 = !empty($_GET['nota3']) ? $_GET['nota3'] :  0;



$media = ($nota1 + $nota2 + $nota3)/3;





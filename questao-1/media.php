<?php 

$nome = $_GET['nomeAluno'];
$media = array_sum([$_GET['nota1'] , $_GET['nota2'], $_GET['nota3']] )/3;

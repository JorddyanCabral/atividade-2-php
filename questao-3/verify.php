<?php

$login = $_POST['login'];
$password = $_POST['password'];

if ($login ==="back-end" && $password ==="bacurim"){
    header("Location: result.php");}
else {
    header("Location: index.php");
}
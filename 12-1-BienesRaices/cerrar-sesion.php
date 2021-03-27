<?php 

session_start();

//se reinicia la sesion
$_SESSION = [];

header('Location: /');
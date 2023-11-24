<?php
	session_start(); #Vai iniciar uma sessao que oferece uma variavel global "$_SESSION"
	
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbName = 'horsecare';
	$conexao = new mysqli($host, $username, $password, $dbName);
?>
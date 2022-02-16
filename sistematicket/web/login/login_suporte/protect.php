<?php

if (!isset($_SESSION)) {
	session_start();
}

if (!isset($_SESSION['id'])) {
	die("<script>alert('Você não pode acessar está página porque não está logado.');</script> <p><a href=\"index.php\">Entrar</a></p>");
}
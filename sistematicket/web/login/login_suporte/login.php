<?php 
include('config.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
	
	if (strlen($_POST['email']) == 0) {
		echo "Prencha seu e-mail";
	}else if (strlen($_POST['senha']) == 0) {
		echo "Prencha sua senha";
	}else {

		$email = $conn->real_escape_string($_POST['email']);
		$senha = $conn->real_escape_string($_POST['senha']);

		$sql ="SELECT * FROM suporte WHERE email_funcionario = '$email' AND senha_funcionario = '$senha'";

		$res = $conn->query($sql) or die("Falha na execução do código SQL: " . $conn->error);

		$qntd = $res->num_rows;

		if($qntd == 1){

			$user = $res->fetch_assoc();

			if (!isset($_SESSION)) {
				session_start();
			}

			$_SESSION['id'] = $user['id_funcionario'];
			$_SESSION['nome'] = $user['nome_funcionario'];

			print "<script>location.href='dashboard.php';</script>";
		}else{
			unset($email);
			print "<script>alert('Dados incorretos');</script>";
			print "<script>location.href='index.php';</script>";
		}
	
	}
}

?>

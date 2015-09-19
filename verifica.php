<?php

session_start();

if($_POST){
	
	include 'conecta.php';
	
	
	$login = trim($_POST["login"]);
	$senha = trim($_POST["senha"]);
	
	if(empty($login)){
		
		echo "<script>alert('Preencha o Login...');history.back();</script>";
		
	}
	elseif (empty($senha)){
		
		echo "<script>alert('Preencha a senha...');history.back();</script>";
			
	}
	else {
		
		$sql = "select * from acessar";
		
		$res = mysql_query($sql);
		
		$linha = mysql_fetch_array($res);
		$login2 = $linha["login"];
		$senha2 = $linha["senha"];
		
		//$senha = md5($senha);
		
		if(empty($login2)){
			
			
			echo "<script>alert('Usuario nao existe...');history.back();</script>";
			
		}elseif ($senha != $senha2){
			
			echo "<script>alert('senha invalida...');history.back();</script>";
			
		}else{
			
			$_SESSION["acessar"] = array(	"login"=>$linha["login"],
											"senha"=>$linha["senha"]);
			
			header("Location: index.php");
			
		}
	}
}else {
	
	echo "Requisição Inválida!";
	exit;
}

?>
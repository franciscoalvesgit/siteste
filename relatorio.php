<?php


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<title>teste</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link type="text/css" rel="stylesheet" href="teste.css"/>

<!-- JQuery  -->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>
<body>
<div id="folhabranca">
<img id="background" alt="logo" src="images/logo.png">
<?php 

$nome = trim($_POST["nome"]);
$sobrenome = trim($_POST["sobrenome"]);
$email = trim($_POST["email"]);
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);


?>
 
 
 <div id="relatorio">
 
 <form action="gerarPdf.php" method="post" name="formlogin">
  	<table border="1" cellpadding="2" cellspacing="2">
    			<tr>
    				<td colspan="4">Data: 20/05/2015 - Sabado</td>
    			</tr>
    			<tr>
    				<td><a>NOME</a></td>
         			<td><a>SOBRENOME</a></td>
         			<td><a>EMAIL</a></td>
         			<td><a>LOGIN</a></td>
         			<td><a>SENHA</a></td>
         		</tr>
         		<tr>
         			<td><a><?php echo $nome?></a></td>
         			<td><a><?php echo $sobrenome?></a></td>
         			<td><a><?php echo $email?></a></td>
         			<td><a><?php echo $login?></a></td>
         			<td><a><?php echo $senha?></a></td>
         		</tr>
         			
    		</table>
    		<div id="botao">
    		<input type="submit" name="botao" class="botao" value="Cadastrar" />
			</div>
    		</form>
    	    		
    	</div>
    	</div>
</body>
</html>
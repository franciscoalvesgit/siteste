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
 <div id="formulario">
    
    	<h4>Acesso a Área do Professor</h4>
    	
			<form action="verifica.php" method="post" name="formlogin">
				<label id="la">Aluno:</label>
				<input type="text" name="login" class="login" size="10" maxlength="10"/>
				<label id="se">Senha:</label>
				<input type="password" name="senha" class="senha" size="10" maxlength="10"/><br/><br>
				
				<input type="reset" name="limpar"  value="Limpar" class="btn-contato-reset"  />
				<input type="submit" name="botao" class="botao" value="Efetuar Login" />
			</form>
    
  	</div>
</div>
</body>
</html>
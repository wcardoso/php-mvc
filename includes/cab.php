
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="">
	<title>Projeto Cliente</title>
	<meta name="descricao" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet"  href="<?php echo BASEURL;?>css /bootstrap.min.css">
	<style> 
        body{
        	padding-top: 50px;
        	padding-bottom: 20px;
        }
	</style>
	<link rel="stylesheet" href="<?php echo BASEURL;
	?>
	css/style.css">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>



	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		<!--Cabeçalho começa aqui, texto navegação-->

				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only"> Navegação</span>					
							<!--Responsivo-->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo BASEURL;?>index.php" class="navbar-brand">Home</a>
			</div>
			<!--Cabeçalho termina aqui, texto navegação-->
			<Dropdown menu começa aqui
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Perfis <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Novo</a></li>
							<li><a href="<?php echo BASEURL;?>cliente/aplus.php">Gerenciar Perfis</a></li>
						</ul>
					</li>
				</ul>
				
			</div><!--/.navbar-collapse Termina dropdown-->
		</div>
	</nav>
	<main class="container">


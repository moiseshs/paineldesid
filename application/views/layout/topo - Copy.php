
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Painel Desid </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
	<link href="https://getbootstrap.com//docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Favicons -->
	<link rel="apple-touch-icon" href="https://getbootstrap.com//docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="https://getbootstrap.com//docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="https://getbootstrap.com//docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="https://getbootstrap.com//docs/5.2/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="https://getbootstrap.com//docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
	<link rel="icon" href="https://getbootstrap.com//docs/5.2/assets/img/favicons/favicon.ico">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	<meta name="theme-color" content="#712cf9">    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/carousel/carousel.css" rel="stylesheet">
	
<!--	<style>
      body {min-height: 100%}
      footer {position: absolute; height: 2.5rem; width: 100%; bottom: 0}
      .position-relative {position: relative}
    </style>
	-->
	
  </head>
  <body>
    




<?php 

// connect to ldap server
//$ldapconn = ldap_connect("ldap://saude.gov.br")
//    or die("Could not connect to LDAP server.");


//$nomes= get_current_user();
//$pieces = explode(".", $nomes);
//$usuario=ucfirst($pieces[0]). " " . ucfirst($pieces[1]);





?>


<header>
<!--  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #0F487F;">
	<a class="navbar-brand" href="http://paineldesid.saude.gov.br/"> &nbsp;&nbsp;Painel DESID</a>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<!--<font color="white"><?php //echo "<font color=white> Seja bem vindo: ".$usuario."</font>";?></font>
	</div>
  </nav>-->
 <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #0F487F;">
  

     
	  
	<div class="dropdown">
		<a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Gastos</a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
			<!--<li><a class="dropdown-item" href="#">Em Saúde</a></li>
			<li><a class="dropdown-item" href="#">Percapita</a></li>
			<li><a class="dropdown-item" href="#">Por Esfera</a></li> -->
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/gasto_administrativo/#">Administrativos</a></li>
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/gasto_tributos_saude/#">Tributos em Saúde</a></li>
		</ul>
	</div>

	<div class="dropdown">
		<a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Relatórios</a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
			<!--<li><a class="dropdown-item" href="#">Em Saúde</a></li>
			<li><a class="dropdown-item" href="#">Percapita</a></li>
			<li><a class="dropdown-item" href="#">Por Esfera</a></li>
			<li><a class="dropdown-item" href="#">Administrativos</a></li>
			<li><a class="dropdown-item" href="#">Tributos em Saúde</a></li>-->
		</ul>
	</div>
	<div class="dropdown">
		<a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><font color="White">&nbsp; &nbsp; &nbsp;ContaSHA</font></a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/contasha_tabela1/" target="blamk" >Gastos em saúde segundo regimes de financiamento SHA</a></li>
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/contasha_tabela2/">População, gastos per capita em saúde</a></li>
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/contasha_tabela4/">Gastos anuais per capita em saúde, segundo regime de financiamento</a></li>
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/contasha_grafico2/">Participação dos regimes de financiamento (HF) nos gastos com funções de cuidados de saúde</a></li>
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/contasha_grafico4/">Gastos em saúde de países selecionados, segundo serviços e bens consumidos</a></li>
			<li><a class="dropdown-item" href="http://paineldesid.saude.gov.br/index.php/welcome/contasha_tabela11/">Despesas com saúde de regimes públicos (governamentais) (HF 1): participação institucional no período – Brasil (2015-2019)</a></li>
		</ul>
	</div>
<div class="dropdown">
		<a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><font color="White">&nbsp; &nbsp; &nbsp; Links Úteis</font></a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		<!--	<li><a class="dropdown-item" href="http://www.google.com" target="blamk" >Em Saúde</a></li>
			<li><a class="dropdown-item" href="#">Percapita</a></li>
			<li><a class="dropdown-item" href="#">Por Esfera</a></li>
			<li><a class="dropdown-item" href="#">Administrativos</a></li>
			<li><a class="dropdown-item" href="#">Tributos em Saúde</a></li>-->
		</ul>
	</div>

  </nav>
</header>

<main>

  
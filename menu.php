<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Zona Admin</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/consulta_aprendiz.php/consulta_aprendiz.phptstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/consulta_aprendiz.php/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/logosena.png"  width="200px" height="200px" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="menu.php">
			
				<img src="vendors/images/logosena.png" width="30px" height="30px" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="menu.php" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Inicio</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Registrar</span>
						</a>
						<ul class="submenu">
							<li><a href="formulario_programa.php">Registrar Programa</a></li>
							<li><a href="formulario_ficha.php">Registrar Ficha </a></li>
							<li><a href="formulario_aprendiz.php">Registrar Aprendiz</a></li>							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Consultas</span>
						</a>
						<ul class="submenu">
							<li><a href="consulta_programa.php">Consultar programa</a></li>
							<li><a href="consulta_ficha.php">Consultar Ficha</a></li>
							<li><a href="consulta_aprendiz.php">Consultar Aprendiz</a></li>		
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Modificar</span>
						</a>
						<ul class="submenu">
							<li><a href="actualizar_programa.php">Modificar programa</a></li>
							<li><a href="actualizar_ficha.php">Modificar Ficha</a></li>
							<li><a href="actualizar_aprendiz.php">Modificar Aprendiz</a></li>
						</ul>
					</li>	
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Eliminar</span>
						</a>
						<ul class="submenu">
							<li><a href="borrar_programa.php">Eliminar programa</a></li>
							<li><a href="borrar_ficha.php">Eliminar Ficha</a></li>
							<li><a href="borrar_aprendiz.php">Eliminar Aprendiz</a></li>	
						</ul>
					</li>
					<li class="dropdown">
						<a href="imprimir.php" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Imprimir Reportes</span>
						</a>
					</li>		
					<li class="dropdown">
						<a href="cerrar.php" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Cerrar sesion</span>
						</a>
					</li>					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Bienvenido <div class="weight-600 font-30 text-blue">Edwin Guerra!</div>
						</h4>
						<p class="font-18 max-width-600">Sistema de registro y consulta de aprendices del centro biotecnologico del caribe-Ficha 2339956</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/consulta_aprendiz.phpjquery.consulta_aprendiz.php.js"></script>
	<script src="src/plugins/consulta_aprendiz.phpconsulta_aprendiz.phptstrap4.min.js"></script>
	<script src="src/plugins/consulta_aprendiz.phpconsulta_aprendiz.phpponsive.min.js"></script>
	<script src="src/plugins/consulta_aprendiz.phpresponsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>
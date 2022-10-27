
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Registro Aprendices</title>

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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
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
			<div class="loader-logo"><img src="vendors/images/logosena.png" width="200px" height="200px" alt=""></div>
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
			<a href="index.html">
			
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
						<h1 class="font-18 max-width-600">REGISTRAR</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Registro</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="menu.php">Inicio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Formulario de registro</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Ingresa los datos del aprendiz</h4>
						</div>
					</div>
					<form action="guardar_aprendiz.php" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tipo de documento</label>
							<div class="col-sm-12 col-md-10">
							<select class="form-control" name="apre_tipoid">
								<option>Tarjeta de identidad</option>
								<option>Cedula</option>
								<option>Cedula extranjera</option>
							</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Numero de documento</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder=" Escribe el numero de documento" type="text" name="apre_numid">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nombres</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder=" Escribe los nombres"  type="text" name="apre_nombres" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Apellidos</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"  placeholder=" Escribe los apellidos" type="text" name="apre_apellidos">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Direccion</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder=" Escribe la direccion"  type="text" name="apre_direccion">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Telefono</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"  placeholder=" Escribe el numero de telefono" type="text" name="apre_telefono">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ficha</label>
							<?php
                include('funciones.php');
                $miconexion=conectar_bd('','crud');
                $resultado=consulta($miconexion,"SELECT * FROM `fichas`");
                ?>
                <select name="ficha_numero">
                    <?php
                    while($fila=$resultado->fetch_object())
            
                        {
                            ?>
                            <option  value="<?php echo $fila->ficha_numero  ?>"><?php echo $fila->ficha_numero ?></option>
							
                            <?php
                        }
                    ?>
                </select>
						</div>
						<button type="submit" class="btn btn-success">Registrar</button>
					</form>
				</div>
				<!-- Default Basic Forms End -->

				<!-- horizontal Basic Forms Start -->
				
				<!-- horizontal Basic Forms End -->

				
				<!-- Input Validation End -->

			</div>
		</div>
	</div>
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>
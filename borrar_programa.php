
<?php
	
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM programa WHERE progra_nombre LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
    
	
	else
	{
		$query = "SELECT *FROM programa";
		$result = filterRecord($query);
	}
    
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Actualizar Datos</title>

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
	<link rel="stylesheet" type="text/css" href="vendors/styles/mystyle1.css" /> 

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
			<div class="loader-logo"><img src="vendors/images/logosena.png" width ="200px" height="200px"  alt=""></div>
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
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Eliminar </h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Export Datatable start -->
                <div class="container">

                <form action="" method="POST">
                <input type="search" name="valueToSearh" placeholder="Búsqueda">
                <button type="submit" class="btn btn-success btn-lg" name="search" >Buscar</button>
                </form>
                <br />
                <?php

                
                echo "<table border='1'>
                <tr>
                <th>Id programa</th>
                <th>Nombre del programa</th>
                <th>Id asociado tipo de programa</th>  
                <th>Eliminar</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['progra_id'] . "</td>";
                echo "<td>" . $row['progra_nombre'] . "</td>";
                echo "<td>" . $row['tiposp_id'] . "</td>";
                echo "<td><a href='delete_programa.php?id=".$row['progra_nombre']."'><img src='vendors/images/eliminar.png' alt='Edit'></a></td>";
                echo "</tr>";
                }
                echo "</table>";
                

                ?>
				<!-- Export Datatable End -->
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>




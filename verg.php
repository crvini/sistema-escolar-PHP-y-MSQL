<?php
require 'conexion.php';


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				colegio <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">Usuario</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Escritorio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="grados.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Grados</a>
						</li>
						<li>
							<a href="materias.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Materias</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Admin</a>
						</li>
						<li>
							<a href="profesor.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Profesores</a>
						</li>
						<li>
							<a href="alumno.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiantes</a>
						</li>
						<li>
							<a href="padre.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Padres</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Pago <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registroP.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registro</a>
						</li>
						<li>
							<a href="pagos.php"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Pagos</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> configuración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="data.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Colegio </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge"></span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
<div class="tab-pane fade active in" id="new">
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Grados <small> del Colegio</small></h1>
			</div>
			<p class="lead">Todos los grados que tenemos en el colegio:</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Editar lista</a></li>
					  	<li><a href="#list" data-toggle="tab">Ver</a></li>
					</ul>
                        <div class="tab-pane fade active in" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Grados del colegio</th>
                                            <th class="text-center">Materias</th>
                                            <th class="text-center">Profesores</th>
                                            <th class="text-center">Alumnos</th>
										</tr>
									</thead>
									<tbody>
										<tr>
                                        <?php
                                        $id=$_GET['id'];
                                        $sql="  SELECT Gr.Id, Gr.Nombre_grado, Ma.Nombre_materia, Pro.Nombre_profesor, al.Nombre_alumno FROM 
                                        grados Gr INNER JOIN materias Ma ON Ma.Id_grado = Gr.Id 
                                        INNER JOIN profesores_grados Pr ON Pr.Id_grado = Gr.Id 
                                        INNER JOIN profesores Pro ON Pr.Id_profesor = Pro.Id 
                                        INNER JOIN alumnos al ON al.Id_grado = Gr.Id
                                        WHERE Gr.Id ='".$id."'";
                                        $result = mysqli_query($conectar, $sql);
                                            while ($mostrar=mysqli_fetch_array($result)){
                                        ?>
											<td>
                                            <?php echo $mostrar['Id'];?></td>
											<td><?php echo $mostrar['Nombre_grado'];?></td>
                                            <td><?php
                                            echo $mostrar['Nombre_materia'];
                                            ?></td>
                                          <td><?php echo $mostrar['Nombre_profesor']; ?></td>
                                          <td> <?php echo $mostrar['Nombre_alumno']; ?></td> 
										</tr>
                                        <?php
                                        }
                                        ?>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
                        <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  
        
      
      
      
      	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>


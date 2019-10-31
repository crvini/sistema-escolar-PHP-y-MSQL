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
				company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
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
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Padres <small> del alumnos</small></h1>
			</div>
			<p class="lead">Padres de los alumnos del colegio</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Agregar</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="insertPadre.php" method="post">
									    	<div class="form-group label-floating">
											  <label class="control-label">Id</label>
											  <input class="form-control" type="text" name="id">
											</div>
											<div class="form-group label-floating">
										      <label class="control-label">Id_rol</label>
                                              <input class="form-control" type="text" name="id_rol">
										       </div>
                                               <div class="form-group label-floating">
										      <label class="control-label">Nombre Madre</label>
                                              <input class="form-control" type="text" name="Nombre_materno">
										       </div>
                                               <div class="form-group label-floating">
										      <label class="control-label">Nombre Padre</label>
                                              <input class="form-control" type="text" name="Nombre_paterno">
										       </div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellido Madre</label>
											  <input class="form-control" type="text" name="Apellido_materno">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellido Padre</label>
											  <input class="form-control" type="text" name="Apellido_paterno">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">correo</label>
											  <input class="form-control" type="text" name="correo">
											</div>
                                            <div class="form-group label-floating">
											  <label class="control-label">telefono</label>
											  <input class="form-control" type="text" name="Telefono">
											</div>
                                            <div class="form-group label-floating">
											  <label class="control-label">Usuario</label>
											  <input class="form-control" type="text" name="Usuario">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Password</label>
											  <input class="form-control" type="password" name="Password">
											</div>
                                            <div class="form-group label-floating">
											  <label class="control-label">Estatus</label>
											  <input class="form-control" type="text" name="estatus">
											</div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombres de los padres</th>
                                            <th class="text-center">Apellidos </th>
                                            <th class="text-center">Correo</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Información</th>
											<th class="text-center">Acciones</th>
										</tr>
									</thead>
									<tbody>
                                    <?php
                                        $sql="SELECT * FROM padres";
                                        $result = mysqli_query($conectar, $sql);
                                        while ($mostrar=mysqli_fetch_array($result)){

                                        ?>
										<tr>
											<td><?php echo $mostrar['Id'];?></td>
											<td><?php echo $mostrar['Nombre_Materno']; echo " y ";?> <?php echo $mostrar['Nombre_Paterno'];?></td>
											<td><?php echo $mostrar['Apellido_Materno']; echo " y ";?><?php echo $mostrar['Apellido_Paterno'];?></td>
											<td><?php echo $mostrar['Correo'];?></td>
                                            <td><?php echo $mostrar['Telefono'];?></td>
											<td>
											<a href="verpa.php?id=<?php echo $mostrar['Id']?>">Ver Información de sus hijos</a>
											</td>
											<td> 
												<a href="editarpa.php?id=<?php echo $mostrar['Id']?>">Editar</a>
												<a href="eliminarpa.php?id=<?php echo $mostrar['Id']?>">Eliminar</a>
											</td>
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
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
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
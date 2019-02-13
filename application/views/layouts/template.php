<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css' ?>">
</head>
<body>
<header id="header">
	<div class="navbar navbar-fixed-left">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		        </button>
		        <a class="brand" href="/">
		        	<img src="<?php echo base_url().'assets/images/logo_PortalCero.png'; ?> " alt="">
		        </a>
		        <div class="nav-collapse collapse">
		        	<ul>
		        		<li class="login-link text-center">
		        			<a data-toggle="modal" data-target="#loginModal">
		        				<img src="<?php echo base_url().'assets/images/icono_miperfil.png'; ?>" alt="">
			        			<span>Iniciar Sesión</span>
			        		</a>
		        		</li>
		        		<li><a href="#"><img src="<?php echo base_url().'assets/images/icono_tienda.png'; ?>" alt=""> Carrito</a></li>
		        		<li><a href="#"><img src="<?php echo base_url().'assets/images/icono_creadores.png'; ?>" alt=""> Creadores</a></li>
		        		<li><a href="#"><img src="<?php echo base_url().'assets/images/icono_disenadores.png'; ?>" alt=""> Diseñadores</a></li>
		        		<li><a href="#"><img src="<?php echo base_url().'assets/images/icono_aliados.png'; ?>" alt=""> Aliados</a></li>
		        		<li><a href="#"><img src="<?php echo base_url().'assets/images/icono_competencias.png'; ?>" alt=""> Competencias</a></li>
		        		<li><a href="#"><img src="<?php echo base_url().'assets/images/icono_dudas.png'; ?>" alt=""> Dudas</a></li>
		        		<li><a href="#"><img src="<?php echo base_url().'assets/images/icono_nbosotros.png'; ?>" alt=""> Nosotros</a></li>
		        		<li><a href="#" class="close" data-toggle="collapse" data-target=".nav-collapse">cerrar</a></li>
		        	</ul>
		        </div>
		        <div class="menu float-right">
		        	<ul>
		        		<li><a href="" class="active">Inicio</a></li>
		        		<li><a href="">Universos</a></li>
		        		<li><a href="">Tienda</a></li>
		        		<li><a href="">Contacto</a></li>
		        		<li><a class="no-padding"><img src="<?php echo base_url().'assets/images/icono_miperfil_home.png'; ?>" alt=""></a></li>
		        		<li><a class="no-padding" data-toggle="modal" data-target="#loginModal"><img src="<?php echo base_url().'assets/images/icono_carrito_home.png'; ?>" alt=""></a></li>
		        	</ul>
		        </div>
			</div>
		</div>
	</div>
</header>
<div class="main">
    <?php echo $contents ?>
</body>
<div class="modal" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-6">
        		<h2 class="text-center">Registrarme</h2>
        		<form action="">
        			<div class="row">
        				<div class="col-sm-12">
        					<div class="form-group">
        						<label for=""></label>
        						<input type="text" class="form-control">
        					</div>
        				</div>
        			</div>
        		</form>
        	</div>
        	<div class="col-sm-6">B</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
@extends('layouts.index2')
@section('contenido_index')
<div class="container-fluid">
	<div class="row">
		
		<center>
		<div class="footer-section ">
	      <div class="container">
	        <div class="social pull-left">
	          <p><i class="fa fa-phone"></i>541-846-8671 <i class="fa fa-envelope-o"></i>Support@MovingMountainsAdvisors.com</p>
	        </div>
	        <div class="navigation">
	          <ul class="pull-right">
	            <li><a href="index.html">Inicio</a></li>
	            <li><a href="about.html">Contacto</a></li>
	            <li><a href="testimonial.html">Cessar sesion</a></li>
	          </ul>
	        </div> 


	      </div>
	    </div>
		<br><br>
		<div class="content" id="contenido_carousel">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="..." alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="..." alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    ...
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		</center>
	</div>

	<div class="row">
	  <div class="col-xs-4 col-md-2">
	  	<h3>Agencia de viajes</h3>
	  	<ul class="nav nav-pills nav-stacked">
		  <li role="presentation" class="active"><a href="#">Mi cuenta</a></li>
		  <li role="presentation" class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			      Mis proyectos<span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
			      <li role="presentation"><a href="#">Agregar paquete turistico</a></li>
			      <li role="presentation"><a href="#">Editar proyecto</a></li>
			    </ul>
			  </li>
		  <li role="presentation"><a href="#">Mi galeria</a></li>
		  <li role="presentation"><a href="#"><span class="badge">!</span>Notificaciones</a></li>
		</ul>
	  </div>

	  <div class="col-xs-14 col-md-10">
	  		<div class="jumbotron">
				<H1><span class="label label-info">Hola!</span></H1>
			  	<br>
			  <p>
			  	<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title"><strong>Disfruta de las ventajas que te ofrecemos</strong></h3>
			  </div>
			  <div class="panel-body">
			    <p>Atraves de SIGIPT podras centralizar y organizar toda la información referida a tus paquetes turisticos.  
						<br>
					   Trabaja en equipo con proveedores de servicios de diferentes municipios.
					   <br>
					   Aprovecha todos los recursos turisticos desde la comodidad de tu sitio de trabajo u hogar.
					</p>
			  </div>
			</div>

			  </p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Leer mas</a></p>
			</div>
			<br><br>
			
			
			<br><br>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-search" aria-hidden="true">ds</span>
			</div>
			<br>
	  </div>
	</div>
</div>

@endsection
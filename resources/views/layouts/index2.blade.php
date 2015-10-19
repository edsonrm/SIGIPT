<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Agencia turistica</title>
  {!! Html::style('assets/css/bootstrap.min.css') !!}
</head>
<body>
<div id="agrupar">
  <header id="cabeza">
    
  </header>
  <nav id="menu" class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Agencia</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">        
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Inicio</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;Contacto</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Mi cuenta
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar datos
                  </a>
                </li>
                <li><a href="#">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>&nbsp;Actualizar documentacion</a>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                  &nbsp;Cerrar sesion</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>
  <section id="contenido">
    <div class="container-fluid">
        
        <div class="row">
          <div class="col-xs-4 col-md-2">
              <h3>Agencia de viajes</h3>
              <ul class="nav nav-pills nav-stacked">
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
              <li role="presentation"><a href="#">Notificaciones</a></li>
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

            <div class="content">
      <div class="row">
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
              <img src="images/energy.jpg" alt="lA PEGO">
              <div class="carousel-caption">
                Descripcion
              </div>
            </div>
            <div class="item">
              <img src="images/escudo.JPG" alt="...">
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
      </div>
    </div>

            <!--aqui termina fila-->

          </div>

        </div>
      </div>
  </section>

  <footer id="pie">
    Derechos reservados &copy UDEC
    
  </footer>
</div>

    {!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>

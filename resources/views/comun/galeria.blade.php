<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>SIGPT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

	<link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" /><link href="scripts/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="#" id="divSiteTitle">SIGIPT</a><br />
                        <a href="#" id="divTagLine">Turismo fácil</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active"><a href="inicio">Inicio</a></li>
                                <li class="dropdown"><a href="auth/login">Ingreso</a></li>
                                <li class="dropdown">
                                    <a href="inicio" class="dropdown-toggle">Registro <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                            <li><a href="registroTurista">Turista</a></li>
                            <li><a href="registroMunicipio">Municipio</a></li>
                            <li><a href="3-column.html">Three Column</a></li>
                            <li><a href="../documentation/index.html">Documentation</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            </ul>
                            </li>
                            </ul>
                                </li>
                                <li class="dropdown"><a href="gallery.html">Gallery</a></li>
                                <li class="dropdown"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Gallery</span>
            </div> 

        <div class="row-fluid">
                <div class="span12">
                    
                    @if (count($errors) > 0)
                <br />
                        <div class="alert alert-danger">
                            <strong>D'oh!</strong> Tenemos problemas.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                @if ($mensaje)
                    {{ $mensaje }}
                @endif
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 id="myModalLabel">Agrega una imagen a tu galería</h3>
                    </div>
                    <div class="modal-body">




                        <h4>Nueva imagen</h4>
                        <div class="panel panel-default">
                    <div class="panel-body">   
                    <form method="POST" action="storage/save" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                          <div class="col-md-6">
                            <input type="file" class="btn btn-primary" name="file" >
                          </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            {!! Form::label('Nombre para la imagen: ') !!}
                        <div class="col-md-6">
                            {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Imagen']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Descripción para la imagen: ') !!}
                        <div class="col-md-6">
                            {!! Form::textarea('descripcion',null ,['size' => '40x5', 'placeholder' => 'Describe brevemente el contenido de tu imagen']) !!}
                        </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Compartir</button>
                          </div>
                        </div>
                    </form>
                      </div>
                    </div>         
                    </div>
                    <div class="modal-footer">
                       <!-- <button class="btn btn-primary">Acepto</button> -->
                        <button class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>

                
                </div>
                <a href='#myModal' class="btn btn-success" data-toggle="modal">form</a> 
 
                         
                    <h1>Tu galería</h1>

                    <div id="gridArea">
                        <ul id="tiles">

                         @foreach ($imagenes as $imagen )
                         <li>
                            <a href="storage/{{ $imagen->ruta }}" title="{{ $imagen->nombre }}" rel="prettyPhoto[gallery1]"><img src="storage/{{ $imagen->ruta }}" alt="{{ $imagen->nombre }}" title="{{ $imagen->nombre }}" height="420" width="420"/></a>
                            <div class="meta"><span>{{$imagen->created_at}}</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">{{ $imagen->nombre }}</a></h4>
                            <p>{{ $imagen->descripcion }}</p>
                        </li> 
                         @endforeach 
                        
                              
                   
                        </ul>

                    </div>
                     

                </div>
            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                
                    <h3>Acerca del proyecto</h3>

                    <p style="text-align: justify;">Es necesario centralizar y organizar los flujos de información de todos los actores de la industria turística con el fin de coordinar los esfuerzos de las partes mencionadas y aprovechar todos los recursos que ofrece cada municipio</p>
                    
                    <p> 
                        <a href="terminosYcondiciones.pdf" title="terminosYcondiciones.pdf">Terminos y condiciones</a><br />
                        <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                        <a href="#" title="Sitemap">Sitemap</a>
                    </p>

                </div>
           <!--     <div class="span3" id="footerArea2">

                    <h3>Recent Blog Posts</h3> 
                    <p>
                        <a href="#" title="">Lorem Ipsum is simply dummy text</a><br />
                        <span style="text-transform:none;">2 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Duis mollis, est non commodo luctus</a><br />
                        <span style="text-transform:none;">5 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Maecenas sed diam eget risus varius</a><br />
                        <span style="text-transform:none;">19 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">VIEW ALL POSTS</a>
                    </p>

                </div>-->
                <div class="span3" id="footerArea3">

                    <h3>GISTFA</h3> 
                    <p style="text-align: justify;">Como apoyo a la actividad investigativa desarrollada en el programa de ingeniería de sistemas, extensión Facatativá, se crea con aval de Colciencias, en el año 2010 el grupo de investigación de sistemas y tecnología de Facatativá (GISTFA). En el año 2012 GISTFA abandona el concepto de grupo de estudio con el que nació para dar paso a la creación de propuestas serias hacia la solución de problemas.
                    </p>

                </div>
                <div class="span3" id="footerArea4">

                    <h3>Contacto</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Telefono:</span>
                        <br />
                        (+37) 3108142444 / 3108674210                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Correo:</span>
                        <br />
                        <a href="mailto:sigipt@gmail.com" title="Email">sigipt@gmail.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Dirección:</span>
                        <br />
                        Calle 15<br />
                        Facatativá, Cundinamarca<br />
                        Colombia
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2015 Universidad de Cundinamarca. Todos los derechos reservados.
                    </p>

                    <p class="social_bookmarks">
                        <a href="www.facebook.com" src="www.facebook.com"><i class="social foundicon-facebook"></i> Facebook</a>
            <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
            <a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
            <a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </p>
                </div>
            </div>
            <br />

        </div>

    </div>
    
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script><script src="scripts/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script><script type="text/javascript">$("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});$("a[rel^='prettyPhoto'] img").hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});</script>



</body>
</html>
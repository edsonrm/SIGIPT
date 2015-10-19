<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>SIGPT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->
    <!--ORIGINALES
    {!! Html::style('scripts/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('scripts/bootstrap/css/bootstrap-responsive.min.css') !!}-->

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <!--< ORIGINALES
    {!! Html::style('scripts/icons/general/stylesheets/general_foundicons.css') !!}
    {!! Html::style('scripts/icons/social/stylesheets/social_foundicons.css') !!}-->
   
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
     <!--ORIGINALES
    {!! Html::style('scripts/fontawesome/css/font-awesome.min.css') !!}
    {!! Html::style('scripts/carousel/style.css') !!}
   -->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

<link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    <!--ORIGINALES
    {!! Html::style('http://fonts.googleapis.com/css?family=Palatino+Linotype') !!}

    {!! Html::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans') !!}
    
    {!! Html::style('http://fonts.googleapis.com/css?family=Abel') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans') !!}
    {!! Html::style('styles/custom.css') !!}
    -->
</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                    <a href="inicio" id="divSiteTitle"><img src="images/udc.jpg" alt="SIGIPT" title="SIGIPT" width="50" height="50" /></a>
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
                            <li><a href="registroProveedor">Proveedor</a></li>
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
                                <li class="dropdown"><a href="galeria">Galería</a></li>
                                <li class="dropdown"><a href="contact">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
    
@yield('content')

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
                
                <div class="span3" id="footerArea2">

                    <h3>GISTFA</h3> 
                    <p style="text-align: justify;">Como apoyo a la actividad investigativa desarrollada en el programa de ingeniería de sistemas, extensión Facatativá, se crea con aval de Colciencias, en el año 2010 el grupo de investigación de sistemas y tecnología de Facatativá (GISTFA). En el año 2012 GISTFA abandona el concepto de grupo de estudio con el que nació para dar paso a la creación de propuestas serias hacia la solución de problemas.
                    </p>

                </div>
                <div class="span3" id="footerArea3">
                <img src="images/udec.png" alt="SIGIPT" title="SIGIPT" class="pull-center" />
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
    <!-- Scripts -->
      <!--ORIGINALES
    {!! Html::script('scripts/jquery.min.js') !!}
    {!! Html::script('scripts/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('scripts/default.js') !!}
    {!! Html::script('scripts/carousel/jquery.carouFredSel-6.2.0-packed.js') !!}-->
  
<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>


</body>
</html>
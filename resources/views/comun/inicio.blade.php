@extends('aplicacion')

@section('content')
<div id="decorative1" style="position:relative">
    <div class="container">

        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">

                        <div id="headerSeparator"></div>

                        <div id="divHeaderText" class="page-content">
                            <div id="divHeaderLine1">Turismo Fácil</div><br />
                            <div id="divHeaderLine2">Sistema integrado de gestión e información de proyectos turísticos</div><br />
                            <div id="divHeaderLine3"><a class="btn btn-large btn-primary" href="#bienvenido">Más información</a></div>
                        </div>

                        <div id="headerSeparator2"></div>

                </div>
            </div>

        </div>

    </div>
</div>
<div id="contentOuterSeparator"></div>
<br><br><br><br><br><br><br><br><br>
<div class="container" id="bienvenido">

    <div class="divPanel page-content">

        <div class="row-fluid">

                <div class="span12" id="divMain">
<br>
                    <h1>Bienvenidos</h1>

                    <p>Este aplicativo web servirá de ayuda a todos los municipios pues les permite impulsar la comercialización de sus recursos. Asimismo, gestionar todos los aspectos turísticos dando una estructura organizada a la forma en que trabajan todas las entidades prestadoras de servicios turísticos entre sí. Por tanto aumentara la eficiencia e impactará sobre aprovechamiento de sus fuentes económicas.
                    </p>
                    <p>De igual manera esta herramienta apoyará a los actores de la industria del turismo de forma que estos puedan simplificar los procesos de creación de productos o servicios a prestar. También ayudará a identificar de mejor manera las necesidades actuales del sector y suplir estas a sus clientes. En consecuencia impactará sobre su productividad.
                    </p>

                    <hr style="margin:45px 0 35px" />

                    <div class="lead">
                        <h2>Lorem ipsum dolor sit amet.</h2> 
                        <h3>Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</h3>
                    </div>

                    <div class="list_carousel responsive">
                        <ul id="list_photos">
                            <li><img src="images/carmel.jpg" class="img-polaroid">  </li>
                            <li><img src="images/rula-sibai-pink-flowers.jpg" class="img-polaroid">  </li>
                            <li><img src="images/girl-flowers.jpg" class="img-polaroid">  </li>
                            <li><img src="images/night-city.jpg" class="img-polaroid">  </li>
							<li><img src="images/irish-hands.jpg" class="img-polaroid">  </li>                            
                            <li><img src="images/Top_view.jpg" class="img-polaroid">  </li>
                            <li><img src="images/vectorbeastcom-grass-sun.jpg" class="img-polaroid">  </li>
                            <li><img src="images/sunset-hair.jpg" class="img-polaroid">  </li>
							<li><img src="images/stones-hi-res.jpg" class="img-polaroid">  </li>
							<li><img src="images/salzburg-x.jpg" class="img-polaroid">  </li>
                        </ul>
                    </div> 
					
                    <hr style="margin:45px 0 35px" />
                    
                    

                </div>

            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>
@endsection

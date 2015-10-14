@extends('aplicacion')
@section('content')

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="row-fluid">
                <div class="span8">
{!! Form::open(['route' => 'administracion.store', 'method' => 'POST']) !!}
                   <h1>Registra un municipio</h1>
                    @if (count($errors) > 0)
                <br />
                        <div class="alert alert-danger">
                            <strong>D'oh!</strong> Tenemos problemas con tu registro.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                    <div class="hero-unit">               
           
            
                {!! Form::label('Nombre municipio: ') !!}
                <!--{!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del municipio']) !!}-->
                {!! Form::select('nombre', $municipios, $selected) !!}
                <br />
                {!! Form::label('Correo electrónico: ') !!}
                {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'correo@gmail.com']) !!}
                <br />
                {!! Form::label('Contraseña: ') !!}
                {!! Form::password('clave', null,['class' => 'form-control']) !!}
                <br />
                {!! Form::label('Confirme la contraseña: ') !!}
                {!! Form::password('clave_confirmation', null,['class' => 'form-control']) !!}
                <br />
                <label class="checkbox"><input name="acepto" type="checkbox" >He leído y acepto los <a href='#myModal'  data-toggle="modal">términos y condiciones</a> de SIGIPT</label>
                <br />
                {!! Form::submit('Registrar',['class' => 'btn btn-success']); !!}
                
                  
            </div>
            {!! Form::close() !!} 
            <br />



                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 id="myModalLabel">Términos y Condiciones de Uso y Privacidad</h3>
                    </div>
                    <div class="modal-body">




                        <h4>Del sitio</h4>
                        <p>Este Sitio Web www.sigipt.com es operado por Unicundi y se encuentra a su disposición para fines informativos. Al acceder o utilizar este Sitio Web, usted acepta estos Términos y Condiciones de Uso y Privacidad. Si usted no acepta los Términos y Condiciones de Uso, usted no puede utilizar este Sitio Web. 
Registro. Contraseña 
El titular se reserva el derecho de solicitar la registración del Visitante para la Página Web, toda o parte de ella, que previamente haya sido de libre acceso y, en tal caso, está facultada, en cualquier momento y sin expresión de causa, a denegar al usuario el acceso al área protegida por contraseñas, en particular si el usuario: 
<ul>
<li>
1)  Proporciona datos incorrectos con el fin de registrarse; 
</li>
<li>
2)  Incumple estos Términos y Condiciones de Uso y Privacidad; 
</li>
<li>
3)  Incumple cualquier normativa aplicable respecto del acceso o el uso de la presente Página Web..</p>
</li>
</ul>
                    </div>
                    <div class="modal-footer">
                       <!-- <button class="btn btn-primary">Acepto</button> -->
                        <button class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>

                
                </div>
                <div class="span4">

                    <div class="input-append">
                        <input class="span9" id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Go!</button>
                    </div>

                    <br />

                    <h2>De interés</h2>

                    <br />
                    <article class="youtube video flex-video">
                        <iframe width="560" height="315" src="http://www.youtube.com/embed/Re239AoAzbI"></iframe>
                    </article>

                    
                    <br />

                </div>
            </div>

@endsection
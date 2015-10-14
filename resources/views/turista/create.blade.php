@extends('aplicacion')
@section('content')

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="row-fluid">
                <div class="span8">
{!! Form::open(['route' => 'turista.store', 'method' => 'POST']) !!}
                   <h1>Registrate</h1>
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
                <div class="alert alert-sucess">
                            <ul>
                                {{ $mensaje }}
                            </ul>
                        </div>  
                    <div class="hero-unit">    
                            
                   
            
                {!! Form::label('Nombre: ') !!}
                {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Ingrese su nombre']) !!}
                <br />
                {!! Form::label('Apellido: ') !!}
                {!! Form::text('apellido', null,['class' => 'form-control', 'placeholder' => 'Ingrese su apellido']) !!}
                <br />
                {!! Form::label('Telefono: ') !!}
                {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Ingrese número de contacto']) !!}
                <br />
                {!! Form::label('Correo electrónico: ') !!}
                {!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'turista@correo.com']) !!}
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



                <br /><br />
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

            
<hr>
               
                <br />
                
                <div class="hero-unit">
                <h3>Datos de la empresa</h3>
                
                {!!Form::file('image')!!}
                </div>

                <style type="text/css">
                    .the-icons {list-style-type: none;margin: 0 0 10px 30px;}
                </style>
      
                

                </div>
                <div class="span4">

                    <div class="input-append">
                        <input class="span9" id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Go!</button>
                    </div>

                    <br />

                    <h2>Quote / Testimonial</h2>

                    <br />

                    <blockquote>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                        <small>by Albert Einstein</small>
                    </blockquote>

                    <h1>H1</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <h2>H2</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <h3>H3</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
                    <h4>H4</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <h5>H5</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
                    <h6>H6</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <br />

                    <h2>Unordered List</h2>
                    <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    </ul>
                    <br />

                    <h2>Ordered List</h2>
                    <ol>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    </ol>
                    <br />

                    <h2>Address</h2>
                    <p>
                        <address><strong>Your Company, Inc.</strong><br />
                        Address<br />
                        City, State, Zip<br />
                        <abbr title="Phone">P:</abbr> (123) 456-7890</address> 
                        <address>  <strong>Full Name</strong><br />
                        <a href="mailto:#">first.last@gmail.com</a></address>  
                    </p>
                    <br />

                    <h2>Well</h2>
                    <div class="well">              
                        Look, I'm in a well!
                    </div>
                    <br />

                </div>
            </div>

@endsection
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
                {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del municipio']) !!}
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
                <label class="checkbox"><input name="acepto" type="checkbox" >He leído y acepto los <a href='terminosYcondiciones.pdf' target='_blank'>términos y condiciones</a> de SIGIPT</label>
                <br />
                {!! Form::submit('Registrar',['class' => 'btn btn-success']); !!}
                
                  
            </div>
            {!! Form::close() !!} 
            <br />

            <br />


            <br />

            <br />



            <br />

      






                <br /><br />

                <br />


                <h2>Modal</h2>

                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 id="myModalLabel">Modal Heading</h3>
                    </div>
                    <div class="modal-body">
                        <h4>Text in a modal</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </div>

                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>

                <br /><br />

            

               
                <br />

                <style type="text/css">
                    .the-icons {list-style-type: none;margin: 0 0 10px 30px;}
                </style>
      
                <a class="btn btn-primary" href="#"><i class="icon-refresh icon-spin"></i> Synchronizing Content...</a>
                <br />

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
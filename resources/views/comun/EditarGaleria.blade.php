@extends('aplicacion')
@section('content')
          {!! Form::model($imagen, array('route' => array('imagen.update', $imagen->id), 'files' => true, 'method' => 'PUT')) !!}
                        <div class="form-group">
                          <div class="col-md-6">
                            <input type="file"  name="file" >
                          </div>
                        </div>
                        
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
                    {!! Form::close() !!} 
                    @endsection
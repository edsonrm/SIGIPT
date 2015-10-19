@extends('aplicacion')
@section('content')

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">


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
                        <div class="alert alert-success">
                            <strong>Yhea!</strong>{{ $mensaje}}.<br><br>
                            
                        </div>
                @endif

                <div class="alert alert-info">
                	<p>Recuerda que al subir y mantener actualizados estos documentos en nuestra plataforma mejorará la calificación que verán tus clientes.</p>
                </div>
                
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 id="myModalLabel">Agrega y actualiza tus certificados</h3>
                    </div>
                    <div class="modal-body">
                        <h4>Agregar o actualizar documento</h4>
                        <div class="panel panel-default">
                    <div class="panel-body">   
                    <form method="POST" action="storage/saveD" accept-charset="UTF-8" enctype="multipart/form-data">
                       
                		
                		<div class="form-group">
                        	 
                          <div class="col-md-6">
                            {!! Form::select('tipo', $tipos, $selected) !!}
                          </div>
                        </div>
                        	<br />
                        <div class="form-group">
                        {!! Form::label('Selecciona tu archivo (.PDF): ') !!}
                        	
                          <div class="col-md-6">
                            <input type="file" class="btn btn-primary" name="certificado" >
                          </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <br />
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Subir</button>
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
                <a href='#myModal' class="btn btn-success" data-toggle="modal">Agrega tus certificados</a> 
  
                    <h1>Tus Documentos</h1>
                        <ul >
                        <li>
                        <h3><a href="#">Certificado RNT</a></h3>
@if ($RNT)
                     
                         	
                            <a href="styles/thumbs/sticky_800.jpg" title="Sticky" rel="prettyPhoto[gallery1]"><embed src="storage/documentos/{{ $usuario->correo }}/{{ $RNT->ruta }}" width="900" height="375"></a>
                            <div class="meta"><span>Modificación: {{ $RNT->updated_at}}</span></div><div>{!! link_to_route('imagen.destroy', $title = 'Eliminar', $parameters = $RNT->id, $attributes = ['class' => 'btn btn-primary', 'method' => 'delete']) !!}</div>
                        </li> 

                        @else
                        <div class="alert alert-warning">
                	<p>No has subido tu certificado RNT.</p>
               		 </div>
                   

          @endif 
          <li>
          <h3><a href="#">Registro mercantil</a></h3>  
          @if ($RM) 
                       
                     
                        	
                            <a href="styles/thumbs/sticky_800.jpg" title="Sticky" rel="prettyPhoto[gallery1]"><embed src="storage/documentos/{{ $usuario->correo }}/{{ $RM->ruta }}" width="900" height="375"></a>
                            <div class="meta"><span>Modificación: {{ $RM->updated_at}}</span></div><div><button class="btn btn-primary">Eliminar</button></div>
                         </li> 
                         @else
                        <div class="alert alert-warning">
                	<p>No has subido tu registro mercantil.</p>
               		 </div> 
                  @endif      
                              
                   
                        </ul>

                     

                </div>
            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>


@endsection
@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Productos <span class="lead pull-right">Agregar Productos</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
    {{ Form::open(array('url' => 'admin/productos','files' => true)) }}

       <div class="row-fluid">
           <div class="span6">

           				<div class="control-group">
                        <label class="control-label">Marca</label>
                        <div class="controls">
                         <select name="id_brand" id="id_brand">
                           @foreach($brand as $b)
                           <option value="{{ $b->id; }}">{{$b->brand}}</option>
                           @endforeach
                         </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tipo Producto</label>
                        <div class="controls">
                         <select name="id_product_type" id="id_product_type">
                           @foreach($type as $t)
                           <option value="{{ $t->id; }}">{{$t->type}}</option>
                           @endforeach
                         </select>
                        </div>
                    </div>

                           <div class="control-group">
                        <label class="control-label">Nombre</label>
                        <div class="controls">
                            {{ Form::text('name', Input::old("name")) }}
                        </div>
                    </div>



                           <div class="control-group">
                        <label class="control-label">Imagen</label>
                        <div class="controls">
                            {{ Form::file('image') }}
                        </div>
                    </div>  

                          <div class="control-group">
                   <label class="control-label">Descripción</label>
                   <div class="controls">
                  		 {{ Form::textarea('description', null, ['style' => 'width: 674px; height: 210px'], Input::old("description")) }}
                   </div>
                </div>                        
  
               
            
                       
    <div class="control-group">
            <div class="controls">
               {{Form::submit('Agregar', array('class' => 'btn btn-primary'));}}
            </div>
        </div>

       </div>
           </div>
           </div>
    {{ Form::close()}}
    </div>
</div>
@stop

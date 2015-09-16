@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Tipo Producto <span class="lead pull-right">Editar Tipo Producto</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
  {{ Form::model($tipoproducto, array('route' => array('admin/tipoproducto.update', $tipoproducto->id),'method'=>'put')) }}

       <div class="row-fluid">
           <div class="span6">     


           <div class="control-group">
                        <label class="control-label">Marca</label>
                        <div class="controls">
                            {{ Form::text('type', Input::old("type")) }}
                        </div>
                    </div>



       </div>
  </div>
            
                       
    <div class="control-group">
            <div class="controls">
               {{Form::submit('Editar', array('class' => 'btn btn-primary'));}}
            </div>
        </div>

    {{ Form::close()}}
    </div>
</div>
@stop

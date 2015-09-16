@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Marca <span class="lead pull-right">Editar Marca</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
  {{ Form::model($brand, array('route' => array('admin/marca.update', $brand->id),'method'=>'put')) }}

       <div class="row-fluid">
           <div class="span6">     


           <div class="control-group">
                        <label class="control-label">Marca</label>
                        <div class="controls">
                            {{ Form::text('brand', Input::old("brand")) }}
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

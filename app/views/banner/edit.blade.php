@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Banner <span class="lead pull-right">Editar Banner</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
  {{ Form::model($banner, array('route' => array('admin/banner.update', $banner->id),'method'=>'put', 'files' => true)) }}

       <div class="row-fluid">
           <div class="span6">
               
                          <div class="control-group">
                   <label class="control-label">Titulo</label>
                   <div class="controls">
                  		 {{ Form::text('title', Input::old("content")) }}
                   </div>
                </div>        


           <div class="control-group">
                        <label class="control-label">Imagen</label>
                        <div class="controls">
                            {{ Form::file('image', Input::old("image")) }}
                        </div>
                          <label class="alert alert-danger" >Debe agregar la imagen nuevamente!</label>
                    </div>


            
                       
    <div class="control-group">
            <div class="controls">
               {{Form::submit('Guardar', array('class' => 'btn btn-primary'));}}
            </div>
        </div>

       </div>
  </div>
            

    {{ Form::close()}}
    </div>
</div>
@stop

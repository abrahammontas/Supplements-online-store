@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Banner <span class="lead pull-right">Agregar Banner</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
     {{ Form::open(array('url' => 'admin/banner', 'files' => true)) }}

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

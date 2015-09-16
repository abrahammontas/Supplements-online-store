@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Perfiles <span class="lead pull-right">Agregar Perfiles</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
  {{ Form::open(array('url' => 'admin/perfiles', 'files' => true)) }}

       <div class="row-fluid">
           <div class="span4">
                           <div class="control-group">
                        <label class="control-label">Nombre</label>
                        <div class="controls">
                            {{ Form::text('name', Input::old("name")) }}
                        </div>
                    </div>
               
                          <div class="control-group">
                   <label class="control-label">Apellido</label>
                   <div class="controls">
                  		 {{ Form::text('lastname', Input::old("lastname")) }}
                   </div>
                </div>        


            <div class="control-group">
                        <label class="control-label">Ocupacción</label>
                        <div class="controls">
                            {{ Form::text('occupation', Input::old("occupation")) }}
                        </div>
                    </div>
           </div>

           <div class="control-group">
                        <label class="control-label">Historia</label>
                        <div class="controls">
                            {{ Form::textarea('history', null, ['style' => 'width: 450px; height: 170px'], Input::old("history")) }}
                        </div>
                    </div>
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
               {{Form::submit('Agregar', array('class' => 'btn btn-primary'));}}
            </div>
        </div>

    {{ Form::close()}}
    </div>
</div>
@stop

@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Ofertas <span class="lead pull-right">Editar Ofertas</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
  {{ Form::model($deal, array('route' => array('admin/ofertas.update', $deal->id),'method'=>'put', 'files' => true)) }}

       <div class="row-fluid">
           <div class="span6">
                           <div class="control-group">
                        <label class="control-label">Titulo</label>
                        <div class="controls">
                            {{ Form::text('title', Input::old("title")) }}
                        </div>
                    </div>
               
                          <div class="control-group">
                   <label class="control-label">Descripción</label>
                   <div class="controls">
                  		 {{ Form::text('description', Input::old("description")) }}
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
                        <label class="control-label">Precio</label>
                        <div class="controls">
                            {{ Form::text('price', Input::old("price")) }}
                        </div>
                    </div>
           </div>

           <div class="control-group">
                        <label class="control-label">Desde</label>
                        <div class="controls">
                            {{ Form::text('from', Input::old("from")) }}
                        </div>
                    </div>

           <div class="control-group">
                        <label class="control-label">Hasta</label>
                        <div class="controls">
                            {{ Form::text('to', Input::old("to")) }}
                        </div>
                    </div>
  
       </div>
            
                       
    <div class="control-group">
            <div class="controls">
               {{Form::submit('Editar', array('class' => 'btn btn-primary'));}}
            </div>
        </div>

           </div>
           </div>
    {{ Form::close()}}
    </div>
</div>
@stop

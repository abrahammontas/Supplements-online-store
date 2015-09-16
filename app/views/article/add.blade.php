@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Artículos <span class="lead pull-right">Agregar Artículo</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
     {{ Form::open(array('url' => 'admin/articulos', 'files' => true)) }}

       <div class="row-fluid">
           <div class="span6">
                           <div class="control-group">
                        <label class="control-label">Perfil</label>
                        <div class="controls">
                         <select name="id_profile" id="id_prodile">
                           @foreach($profiles as $p)
                           <option value="{{ $p->id; }}">{{$p->name." ".$p->lastname}}</option>
                           @endforeach
                         </select>
                    </div>
               
                          <div class="control-group">
                   <label class="control-label">Contenido</label>
                   <div class="controls">
                  		 {{ Form::textarea('content', null, ['style' => 'width: 674px; height: 210px'], Input::old("content")) }}
                   </div>
                </div>        


           <div class="control-group">
                        <label class="control-label">Imagen</label>
                        <div class="controls">
                            {{ Form::file('image', Input::old("image")) }}
                        </div>
                    </div>



  </div>
            
                       
    <div class="control-group">
            <div class="controls">
               {{Form::submit('Guardar', array('class' => 'btn btn-primary'));}}
            </div>
        </div>

       </div>
    {{ Form::close()}}
    </div>
</div>
@stop

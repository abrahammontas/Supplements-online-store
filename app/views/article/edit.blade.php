@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="span12">
    <h1>Artículos <span class="lead pull-right">Editar Artículo</span></h1>
    <hr>

      <div class="row-fluid">
          <div class="span6">
              
          </div>   
          <div class="span6">
              
          </div> 
      </div>
    
  {{ Form::model($article, array('route' => array('admin/articulos.update', $article->id),'method'=>'put', 'files' => true)) }}

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
                          <label class="alert alert-danger" >Debe agregar la imagen nuevamente!</label>
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

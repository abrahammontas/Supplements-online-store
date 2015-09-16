
@extends('layouts.admin')

@section('content')
<h1>Lista de Perfiles <small class="pull-right">{{ HTML::link('admin/perfiles/create', 'Agregar Perfil', array('class' => 'btn btn-primary')) }}</small></h1>

<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Ocupación</th>
			<th>Historia</th>
			<th>Imagen</th>
			<th style="text-align:center">Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($profile as $p)
		<tr>
			<td>{{{ $p->id }}}</td>
			<td>{{{ $p->name." ".$p->lastname }}}</td>
            <td>{{{ $p->occupation }}}</td>
            <td>{{{ $p->history }}}</td>
            <td>{{ HTML::image($p->image, 'alt', array('width' => 64 , 'height' => 64)) }}</td>
			<td>
				{{ HTML::link("admin/perfiles/$p->id/edit","Editar",array('class'=>'btn btn-primary')) }}
				//{{ HTML::link("#","Desactivar",array('class'=>'btn btn-primary')) }}
				<a href="#">
          <span class="glyphicon glyphicon-align-justify"></span>
        </a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop
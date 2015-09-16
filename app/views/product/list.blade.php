
@extends('layouts.admin')

@section('content')
<h1>Lista de Productos <small class="pull-right">{{ HTML::link('admin/productos/create', 'Agregar producto', array('class' => 'btn btn-primary')) }}</small></h1>

<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Marca</th>
			<th>Tipo</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Imagen</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $p)
		<tr>
			<td>{{{ $p->id }}}</td>
			<td>{{{ $p->brand->brand }}}</td>
			<td>{{{ $p->type->type }}}</td>
			<td>{{{ $p->name }}}</td>
            <td>{{{ $p->description }}}</td>
            <td>{{ HTML::image($p->image, 'alt', array('width' => 64 , 'height' => 64)) }}</td>
			<td>
				{{ HTML::link("admin/productos/$p->id/edit","Editar",array('class'=>'btn btn-primary')) }}
				<!-- {{ HTML::link("productos/desabilitar/$p->id","Desabilitar",array('class'=>'btn btn-primary')) }}
				{{ HTML::link("productos/$p->id","Borrar",array('class'=>'btn btn-primary')) }} -->
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop
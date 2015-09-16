
@extends('layouts.admin')

@section('content')
<h1>Lista de Artículos <small class="pull-right">{{ HTML::link('admin/articulos/create', 'Agregar artículo', array('class' => 'btn btn-primary')) }}</small></h1>

<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Perfil</th>
			<th>Contenido</th>
			<th>Imagen</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($article as $a)
		<tr>
			<td>{{{ $a->id }}}</td>
			<td>{{{ $a->profile->name." ".$a->profile->lastname }}}</td>
            <td>{{{ $a->content }}}</td>
            <td>{{ HTML::image($a->image, 'alt', array('width' => 64 , 'height' => 64)) }}</td>
			<td>
				{{ HTML::link("admin/articulos/$a->id/edit","Editar",array('class'=>'btn btn-primary')) }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<?print_r($profiles);?>
@stop
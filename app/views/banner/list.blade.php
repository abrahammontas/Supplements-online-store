
@extends('layouts.admin')

@section('content')
<h1>Lista de img Banner <small class="pull-right">{{ HTML::link('admin/banner/create', 'Agregar banner', array('class' => 'btn btn-primary')) }}</small></h1>

<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Titulo</th>
			<th>Imagen</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($banner as $b)
		<tr>
			<td>{{{ $b->id }}}</td>
			<td>{{{ $b->title }}}</td>
            <td>{{ HTML::image($b->image, 'alt', array('width' => 64 , 'height' => 64)) }}</td>
			<td>
				{{ HTML::link("admin/banner/$b->id/edit","Editar",array('class'=>'btn btn-primary')) }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<?print_r($profiles);?>
@stop

@extends('layouts.admin')

@section('content')
<h1>Lista de Ofertas <small class="pull-right">{{ HTML::link('admin/ofertas/create', 'Agregar Oferta', array('class' => 'btn btn-primary')) }}</small></h1>

<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Titulo</th>
			<th>Descripción</th>
			<th>Imagen</th>
			<th>Precio</th>
			<th>Desde</th>
			<th>Hasta</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($deal as $d)
		<tr>
			<td>{{{ $d->id }}}</td>
			<td>{{{ $d->title }}}</td>
            <td>{{{ $d->description }}}</td>
            <td>{{ HTML::image($d->image, 'alt', array('width' => 64 , 'height' => 64)) }}</td>
            <td>{{{ $d->price }}}</td>
            <td>{{{ $d->from }}}</td>
            <td>{{{ $d->to }}}</td>
			<td>
				{{ HTML::link("admin/ofertas/$d->id/edit","Editar",array('class'=>'btn btn-primary')) }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop
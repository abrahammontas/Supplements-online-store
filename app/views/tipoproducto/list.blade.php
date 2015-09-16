
@extends('layouts.admin')

@section('content')
<h1>Lista de Tipo Producto <small class="pull-right">{{ HTML::link('admin/tipoproducto/create', 'Agregar Tipo Producto', array('class' => 'btn btn-primary')) }}</small></h1>

<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tipo Producto</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($tipoproducto as $t)
		<tr>
			<td>{{{ $t->id }}}</td>
            <td>{{{ $t->type }}}</td>
			<td>
				{{ HTML::link("admin/tipoproducto/$t->id/edit","Editar",array('class'=>'btn btn-primary')) }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<?print_r($profiles);?>
@stop

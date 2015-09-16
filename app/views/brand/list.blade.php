
@extends('layouts.admin')

@section('content')
<h1>Lista de Marcas <small class="pull-right">{{ HTML::link('admin/marca/create', 'Agregar Marca', array('class' => 'btn btn-primary')) }}</small></h1>

<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Marca</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($brand as $b)
		<tr>
			<td>{{{ $b->id }}}</td>
            <td>{{{ $b->brand }}}</td>
			<td>
				{{ HTML::link("admin/marca/$b->id/edit","Editar",array('class'=>'btn btn-primary')) }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<?print_r($profiles);?>
@stop

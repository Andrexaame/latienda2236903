@extends('layouts.principal')

@section('contenido');
    <div class="row">
        <h1>Carrito de compras</h1>
    </div>
	<div class="row ">
		<div class="col s12">
			<table>
				<thead>
					<tr>
						<th>Producto</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody>
				@foreach(session('cart') as $index => $prod)
				<tr>
					<td>	{{	var_dump($prod)}}	</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<form action="route('cart.destroy')" method="POST">
		@method('DELETE')
		@csrf
			<button type="submit">
				Eliminar carrito
			</button>
		</form>
	</div>
    
@endsection
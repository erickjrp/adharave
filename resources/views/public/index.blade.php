@extends('layouts.public')

@section('carrusel')

 	@include('public.components.carrusel')

@endsection

@section('content')

	<div class="row">

		<div class="col-xs-12">

			<h2 class="titulo_linea">
				<span>
					<i>Colección</i>
				</span>
			</h2>

		</div>

	</div> 

	@include('public.components.categorias')
	@include('public.components.categorias_sm_xs')

@endsection
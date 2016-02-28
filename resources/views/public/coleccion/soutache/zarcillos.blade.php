@extends('layouts.public')

@section('content')

	@include('public.coleccion.soutache.intro_zarcillos')

	<div class="row">

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<img src="{{ URL::asset('images/nosotras/inspiracion3.png') }}" class="img-responsive center-block">
			<p class="subtitulos_nosotras text-center">Inspiración</p>
			<hr class="hr_oscuro_subtitulos">
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			</p>
			<hr class="hr_oscuro visible-xs-block">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<img src="{{ URL::asset('images/nosotras/mision.png') }}" class="img-responsive center-block">
			<p class="subtitulos_nosotras text-center">Misión</p>
			<hr class="hr_oscuro_subtitulos">
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			</p>
			<hr class="hr_oscuro visible-xs-block">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<img src="{{ URL::asset('images/nosotras/vision2.png') }}" class="img-responsive center-block">
			<p class="subtitulos_nosotras text-center">Visión</p>
			<hr class="hr_oscuro_subtitulos">
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			</p>
			<hr class="hr_oscuro visible-xs-block">
		</div>

	</div>

@endsection
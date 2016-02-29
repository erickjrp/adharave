@extends('layouts.public')

@section('content')

	@include('public.coleccion.soutache.intro_cintillos')

	<?php

	$imagenes[0][0] = "cintillo.jpg";
	$imagenes[0][1] = "cintillo.jpg";
	$imagenes[1][0] = "cintillo.jpg";
	$imagenes[1][1] = "cintillo.jpg";
	$imagenes[2][0] = "cintillo.jpg";
	$imagenes[2][1] = "cintillo.jpg";
	$imagenes[3][0] = "cintillo.jpg";
	$imagenes[3][1] = "cintillo.jpg";
	$imagenes[4][0] = "cintillo.jpg";
	$imagenes[4][1] = "cintillo.jpg";
	$imagenes[5][0] = "cintillo.jpg";
	$imagenes[5][1] = "cintillo.jpg";

	$nombres[0]  = "Soutache Cintillo";
	$nombres[1]  = "Soutache Cintillo";
	$nombres[2]  = "Soutache Cintillo";
	$nombres[3]  = "Soutache Cintillo";
	$nombres[4]  = "Soutache Cintillo";
	$nombres[5]  = "Soutache Cintillo";

	$textos[0]	 = "En este espacio va la pequeña descripción del artículo";
	$textos[1]	 = "En este espacio va la pequeña descripción del artículo";
	$textos[2]	 = "En este espacio va la pequeña descripción del artículo";
	$textos[3]	 = "En este espacio va la pequeña descripción del artículo";
	$textos[4]	 = "En este espacio va la pequeña descripción del artículo";
	$textos[5]	 = "En este espacio va la pequeña descripción del artículo";

	$stop 		 = count($nombres);

	?>

	<div class="row">


		@for($i = 0; $i < $stop; $i++)
		<!--COMIENZA ARTÍCULO-->
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<div class="thumbnail">
				<!--carrusel-->
				<div id="articulo_{!!$i!!}_carrusel" class="carousel slide" data-ride="carousel" data-interval="false">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#articulo_{!!$i!!}_carrusel" data-slide-to="0" class="active"></li>
						<li data-target="#articulo_{!!$i!!}_carrusel" data-slide-to="1"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="{{ URL::asset('images/categorias/soutache/cintillos/'.$imagenes[$i][0]) }}" alt="Anillo">
						</div>
						<div class="item">
							<img src="{{ URL::asset('images/categorias/soutache/cintillos/'.$imagenes[$i][1]) }}" alt="Anillo">
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#articulo_{!!$i!!}_carrusel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#articulo_{!!$i!!}_carrusel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!--finaliza carrusel-->
				<div class="caption text-center">
					<h3 style="color:#e91e63">
						<strong><i>
							{!! $nombres[$i] !!}
						</i></strong>
					</h3>
					<p>
						{!! $textos[$i] !!}
					</p>
					<p>
						<a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#articulo_{!!$i!!}_modal">
							Ampliar imágenes
						</a>
					</p>
				</div>
			</div>
		</div>
		<!--modal artículo-->
		<div class="modal fade" id="articulo_{!!$i!!}_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 class="modal-title" id="myModalLabel" style="color:#e91e63">
							<strong><i>
								{!! $nombres[$i] !!}
							</i></strong>
						</h3>
					</div>
					<div class="modal-body">
						<!--carrusel-->
						<div id="articulo_{!!$i!!}_carrusel_2" class="carousel slide" data-ride="carousel" data-interval="false">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#articulo_{!!$i!!}_carrusel_2" data-slide-to="0" class="active"></li>
								<li data-target="#articulo_{!!$i!!}_carrusel_2" data-slide-to="1"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="{{ URL::asset('images/categorias/soutache/cintillos/'.$imagenes[$i][0]) }}" alt="Anillo" class="center-block">
								</div>
								<div class="item">
									<img src="{{ URL::asset('images/categorias/soutache/cintillos/'.$imagenes[$i][1]) }}" alt="Anillo" class="center-block">
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#articulo_{!!$i!!}_carrusel_2" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#articulo_{!!$i!!}_carrusel_2" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<!--finaliza carrusel-->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
					</div>
				</div>
			</div>
		</div>
		<!--termina modal artículo-->
		<!--TERMINA ARTÍCULO-->
		@endfor

	</div>

@endsection
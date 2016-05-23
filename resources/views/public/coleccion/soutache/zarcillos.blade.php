@extends('layouts.public')

@section('content')

	@include('public.coleccion.soutache.intro_zarcillos')

	<?php

	$imagenes[0][0] = "1.jpg";
	//$imagenes[0][1] = "zarcillo.jpg";
	$imagenes[1][0] = "2.jpg";
	//$imagenes[1][1] = "zarcillo.jpg";
	$imagenes[2][0] = "3.jpg";
	//$imagenes[2][1] = "zarcillo.jpg";
	$imagenes[3][0] = "4.jpg";
	$imagenes[3][1] = "4_2.jpg";
	$imagenes[4][0] = "5.jpg";
	//$imagenes[4][1] = "zarcillo.jpg";
	$imagenes[5][0] = "6.jpg";
	//$imagenes[5][1] = "zarcillo.jpg";
	$imagenes[6][0] = "7.jpg";
	$imagenes[6][1] = "7_2.jpg";
	$imagenes[6][2] = "7_3.jpg";
	$imagenes[7][0] = "8.jpg";
	//$imagenes[7][1] = "zarcillo.jpg";

	$nombres[0]  = "Soutache Zarcillo";
	$nombres[1]  = "Soutache Zarcillo";
	$nombres[2]  = "Soutache Zarcillo";
	$nombres[3]  = "Soutache Zarcillo";
	$nombres[4]  = "Soutache Zarcillo";
	$nombres[5]  = "Soutache Zarcillo";
	$nombres[6]  = "Soutache Zarcillo";
	$nombres[7]  = "Soutache Zarcillo";

	$textos[0]	 = "";
	$textos[1]	 = "";
	$textos[2]	 = "";
	$textos[3]	 = "";
	$textos[4]	 = "";
	$textos[5]	 = "";
	$textos[6]	 = "";
	$textos[7]	 = "";

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
						@for($j = 0; $j < count($imagenes[$i]); $j++)
						<li data-target="#articulo_{!!$i!!}_carrusel" data-slide-to="{!!$j!!}" @if($j == 0) class="active" @endif></li>
						@endfor
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						@for($j = 0; $j < count($imagenes[$i]); $j++)
						<div class="item @if($j == 0) active @endif">
							<img src="{{ URL::asset('images/categorias/soutache/zarcillos/'.$imagenes[$i][$j]) }}" alt="Pulsera">
						</div>
						@endfor
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
								@for($j = 0; $j < count($imagenes[$i]); $j++)
								<li data-target="#articulo_{!!$i!!}_carrusel_2" data-slide-to="{!!$j!!}" @if($j == 0) class="active" @endif></li>
								@endfor
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								@for($j = 0; $j < count($imagenes[$i]); $j++)
								<div class="item @if($j == 0) active @endif">
									<img src="{{ URL::asset('images/categorias/soutache/zarcillos/'.$imagenes[$i][$j]) }}" alt="Pulsera" class="center-block">
								</div>
								@endfor
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
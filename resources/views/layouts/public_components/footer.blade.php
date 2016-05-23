<div class="row">

	<div class="hidden-xs hidden-sm col-md-4 col-lg-4 color_blanco">

		<p class="titulo_footer"><i>Adhara</i></p>
		<hr class="hr_footer">
		<p class="text-justify">
			<i>Despierta tu estilo con todos los accesorios que no pueden faltar en tu guardaropa. Todos nuestros diseños darán un impulso instantáneo a tu elegancia.</i>
		</p>

	</div>

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 color_blanco" id="contacto">

		<h1 class="titulo_footer_contacto">
			<i>Contacto</i>
		</h1>
		<hr class="hr_footer">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				{!! Form::open(array('url' => array('enviarCorreo'), 'method' => 'POST', 'class' => 'form-horizontal')) !!}

					<div class="form-group">
						<label for="nombre" class="col-sm-2 hidden-md col-lg-2 control-label">Nombre</label>
						<div class="col-sm-10 col-md-12 col-lg-10">
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y apellido" required>
						</div>
					</div>
					<div class="form-group">
						<label for="mensaje" class="col-sm-2 hidden-md col-lg-2 control-label">Mensaje</label>
						<div class="col-sm-10 col-md-12 col-lg-10">
							<textarea class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Escribe aquí tu mensaje..." required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12 col-sm-offset-2 col-sm-10 col-md-8 col-md-offset-0 col-lg-offset-2 col-lg-10">
							<button type="submit" class="btn btn-default hidden-xs" data-toggle="tooltip" data-placement="top" title="Al hacer clic se enviará el mensaje y se recargará la página">Enviar</button>
							<button type="submit" class="btn btn-default hidden-sm hidden-md hidden-lg btn-block" data-toggle="tooltip" data-placement="top" title="Al hacer clic se enviará el mensaje y se recargará la página">Enviar</button>
						</div>
					</div>

				{!! Form::close() !!}
				<hr class="hidden-sm hidden-md hidden-lg">

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 centrar_xs">

				<p>
					<strong>
						<i class="fa fa-envelope fa-fw"></i>
						Correo:
					</strong>
					inf.adharacollection@gmail.com
				</p>
				<p>
					<strong>
						<i class="fa fa-mobile fa-fw"></i>
						Celular:
					</strong>
					+58 424-2117050
				</p>
				<p>
					<strong>
						<i class="fa fa-instagram fa-fw"></i>
						Instagram:
					</strong>
					<a class="enlace_contacto" target="_blank" href="https://www.instagram.com/adharave/">
						@AdharaVE
					</a>
				</p>
				<p>
					<strong>
						<i class="fa fa-facebook-official fa-fw"></i>
						Facebook:
					</strong>
					<a class="enlace_contacto" target="_blank" href="https://www.facebook.com/Adhara-Accesorios-y-Dise%C3%B1os-1479747372355455/?fref=ts">
						Adhara Accesorios y Diseños
					</a>
				</p>
				<hr class="hidden-sm hidden-md hidden-lg">
				<p>
					<i class="fa fa-copyright fa-fw"></i>
					2016. All Rights Reserved. Designed by
					<a class="enlace_contacto" target="_blank" href="https://www.facebook.com/erick.ramirez1991">
						Erick Ramírez
					</a>
				</p>

			</div>

		</div>

	</div>

</div>
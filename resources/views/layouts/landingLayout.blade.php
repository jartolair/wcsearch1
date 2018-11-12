<!DOCTYPE HTML>
<html lang="en">

<head>
	@include('layouts/head')

</head>

<body>
	@include('layouts/nav')
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				@yield('1_sec_img')
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content" style="font-size:5vh;">
										@yield('1_sec_texto')
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- section: aplicacion -->
	<section id="aplicacion" class="section green">
		<div class="container">
			<h4>@yield('2_sec_titulo')</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						@yield('2_sec_texto')
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						@yield('2_sec_img')
					</div>
				</div>
			</div>
			<div class="row">
				<div class="aligncenter">
					@yield('2_sec_sub')
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: aplicacion -->
	<!-- section: equipo -->
	<section id="equipo" class="section">
		<div class="container">
			<h4>@yield('3_sec_titulo')</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						@yield('3_sec_texto')
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						@yield('3_sec_img')
					</div>
				</div>
			</div>
			<div class="row">
				<div class="aligncenter">
					@yield('3_sec_sub')
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: equipo -->
	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 flyLeft">
					<blockquote class="large">
						@yield('4_sec_texto')
					</blockquote>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: opiniones -->
	<section id="opiniones" class="section">
		<div class="container">
			<h4>@yield('5_sec_titulo')</h4>
			<!-- Three columns -->
			<div class="row">
				@yield('5_sec_opiniones')

			</div>
			<div class="blankdivider30"></div>
			<div class="aligncenter">
				<a href="#" class="btn btn-large btn-theme">Leer mas opiniones</a>
			</div>
		</div>
	</section>

	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contacto" class="section green">
		<div class="container">
			<h4>@yield('6_sec_titulo')</h4>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<form action="/email" method="get" role="form">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre"/>
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Email"/>
										<div class="validation"></div>
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto"/>
										<div class="validation"></div>
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje"></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" value="Enviar mensaje" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>
	@include('layouts/footer')
	
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>

	@include('layouts/scriptsJS')
	

</body>

</html>

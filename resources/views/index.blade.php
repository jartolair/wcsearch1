@extends('layouts/landingLayout')



@section('1_sec_img')
				<img src="img/logo-image.png" alt="" />
@endsection

@section('1_sec_texto')
				Encuentra el <strong>baño</strong> mas cercano
@endsection





@section('2_sec_titulo','WC Search')

@section('2_sec_texto')
	<h2>Encuentra <strong>tu baño</strong> cuando mas lo necesites</h2>
	<p>
		En esta pagina podras encontrar los baños publicos que esten mas cerca de ti. Para poder
		aliviarte en momentos de emergencia en sitios que desconoces.
	</p>
	<p>
		Ademas podras ver la valoracion de otros usuarios sobre esos baños. Y podras hacer tu propia valoracion
	</p>
	<br />
	<button href="#" class="btn btn-secondary">Iniciar sesion</button>
	<button href="#" class="btn btn-primary ">Registrarse</button>
@endsection

@section('2_sec_img')
	<img src="img/movil.png" alt="" width="500px" />
@endsection

@section('2_sec_sub')
	<img src="img/icons/holding.png" alt="" width="100px" />
	<img src="img/icons/plus.png" alt="" width="50px" />
	<img src="img/logo-image.png" alt="" width="100px" />
	<img src="img/icons/equal.png" alt="" width="50px" />
	<img src="img/icons/happy.png" alt="" width="100px" />
@endsection



@section('3_sec_titulo','Quienes somos?')

@section('3_sec_texto')
	<h2>Somos la compañia <strong>necesitas</strong></h2>
	<p>
		Somos una empresa que se expecializa en ayudar a la ciudadania cuando mas nos necesitan.
	</p>
@endsection

@section('3_sec_img')
	<img src="img/icons/team.png" alt="" width="300px" />
@endsection

@section('3_sec_sub')
	<div class="span2 offset1 flyIn">
		<div class="people">
			<img class="team-thumb img-circle" src="img/team/Meeseeks.png" alt="" />
			<h3>Jon Valdes</h3>
			<p>
				Tecnico especialista
			</p>
		</div>
	</div>
	<div class="span2 flyIn">
		<div class="people">
			<img class="team-thumb img-circle" src="img/team/Meeseeks.png" alt="" />
			<h3>Yaiza Muñoz</h3>
			<p>
				Asistente de dirección
			</p>
		</div>
	</div>
	<div class="span2 flyIn">
		<div class="people">
			<img class="team-thumb img-circle" src="img/team/Meeseeks.png" alt="" />
			<h3>Jon Artola</h3>
			<p>
				Coordinador
			</p>
		</div>
	</div>
@endsection



@section('4_sec_texto')	
	La mejor web de internet, estoy super enganchado a ella. No paro de utilizarla.
	<br/>
	<h3><i>- 2018, Donald Trump</i></h3>
@endsection



@section('5_sec_titulo','Opiniones')

@section('5_sec_opiniones')

	<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/users/user1.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<span class="date">Junio 19, 2013</span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Aitor Menta</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Mas</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/users/user2.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<span class="date">Agosto 19, 2013</span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Iker Tena</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Mas</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/users/user3.png" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star-empty"></i>
							<span class="date">Junio 22, 2013</span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Miren Amiano</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Mas</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/users/user4.jpeg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star"></i>
							<i class="icon-star-half-empty"></i>
							<span class="date">Octubre 27, 2013</span>

						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Marcia Ana</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Mas</a>
						</div>
					</div>
				</div>

@endsection	


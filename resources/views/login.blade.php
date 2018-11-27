<!DOCTYPE html>
<html>
	<head>
		@include('layouts/head')
		<link href="css/login.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="wrapper">
					<form class="form-signin">       
				    	<h2 class="form-signin-heading">Iniciar sesion</h2>
				      	<div class="email-icon"></div><input type="text" class="form-control" id="email" name="email" placeholder="Email" required="" style="height: auto" oninput="comprobar()" />
				      	<p id="errorEmail" style="color: red;" hidden>Email incorrecto</p>
				      	<p id="valido" hidden>Email correcto</p>
				      	<div class="tel-icon"></div><input type="text" class="form-control" id="tel" name="telf" placeholder="Telefono" required="" style="height: auto"oninput="comprobarTel()"/>
						<p id="errorTel" style="color: red;" hidden>telefono incorrecto</p>
				      	<p id="validoTel" hidden>telefono correcto</p>
				      	<div class="contra-icon"></div><input type="password" class="form-control" name="password" placeholder="Contaseña" required="" style="width: 100%"/>      
				      	<button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" disabled>Iniciar sesion</button>   
				    </form>
				</div>
			</div>
		</div>
		<script src="js/comprobarEmail.js"></script>
		@include('layouts/scriptsJS')
	</body>
</html>
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
					<form id="registro" class="form-signin">
				    	<h2 class="form-signin-heading">Registro</h2>
				    	<input type="text" class="form-control" id="nif" name="nif" placeholder="NIF" style="height: auto"/>
				    	<p id="errorNif" style="color: red;" hidden>Nif incorrecto</p>
				    	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required style="height: auto"/>
				    	<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required style="height: auto"/>
				    	<input type="radio" class="form-control" id="sexo" name="sexo" value="hombre" required /> Hombre
				    	<input type="radio" class="form-control" id="sexo" name="sexo" value="mujer" required /> Mujer

				      	<input type="text" class="form-control" id="email" name="email" placeholder="Email" required="" style="height: auto" oninput="comprobar()" />
				      	<p id="errorEmail" style="color: red;" hidden>Email incorrecto</p>
				      	<input type="text" class="form-control" id="tel" name="telf" placeholder="Telefono" required style="height: auto"oninput="comprobarTel()"/>
						<p id="errorTel" style="color: red;" hidden>telefono incorrecto</p>

				      	<input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" style="height: auto"/>
				      	<input type="text" class="form-control" id="postal" name="postal" placeholder="Cod. postal" required style="height: auto" oninput="comprobarPostal()"/>
				      	<p id="errorPostal" style="color: red;" hidden>Cod Postal incorrecto</p>
				      	<select class="form-control" name="municipio" required>
				      		<option value="azkoiti">Azkoiti</option>
				      		<option value="donosti">Donosti</option>
				      	</select><br>
				      	<input type="checkbox" class="form-control" id="newsletter" name="newsletter" style="height: auto"/> Newsletter<br><br>
				      	<button class="btn btn-lg btn-primary btn-block" id="submit" type="submit">Registrarme</button>   
				    </form>
				</div>
			</div>
		</div>
		
		@include('layouts/scriptsJS')
		<script src="js/comprobarEmail.js"></script>
	</body>
</html>
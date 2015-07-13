
      		<form class="form-container" method="post" action="{{URL::route('postLogin')}}">
		<div class="form-title"><h2>Iniciar sesion</h2></div>
		<div class="form-title">email</div>
		<input class="form-field" type="email" name="email"placeholder="ejemplo@ejemplo.com" required /><br />
		<div class="form-title">Contraseña</div>
		<input class="form-field" type="password" name="password" /><br />
		<div class="submit-container">
		<input class="submit-button" type="submit" value="Login" />
		</div>
</form>
      

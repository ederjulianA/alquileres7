
  <form class="form-container" method="post" action="{{URL::route('postLoginCheckout')}}">
    <div class="form-title"><h2>Crear Cuenta</h2></div>
    <div class="form-title">email</div>
    <input class="form-field" type="email" name="email"placeholder="ejemplo@ejemplo.com" required /><br />
    <div class="form-title">Contraseña</div>
    <input class="form-field" type="password" name="password" /><br />
    <div class="form-title">Contraseña Confirmar</div>
    <input class="form-field" type="password" name="password_confirmation" /><br />
    <div class="submit-container">
    <input class="submit-button" type="submit" value="Crear cuenta" />
    </div>
</form>


<!-- Button trigger modal -->



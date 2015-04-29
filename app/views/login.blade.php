 @if(Session::has('message-alert'))
				<div class="row">
					<div class="col-md-5">
						 

			            <div class="alert alert-warning alert-dismissable">
			              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			              <strong>Mensaje</strong> {{Session::get('message-alert')}}
			            </div>

			            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
			                
			            </p>-->
			        
						
					</div>
					
				</div>
			@endif



@if(Auth::check())
	HOLA
@endif
<!-- Login Form Starts -->
		<form class="myform" method="post" action="/postLogin" accept-charset="UTF-8">
									<div class="form-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input id="email" class="form-control" type="text" placeholder="Email" name="email">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">password</label>
										<div class="controls">
											<input id="password" class="form-control" type="password" placeholder="Password" name="password">
										</div>
									</div>
									<p class="text-center"><a href="">Forgot password?</a></p>
									<input class="btn btn-block" type="submit" value="Login" >
								</form>
<!-- Login Form Ends -->
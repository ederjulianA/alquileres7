<?php

class AuthController extends Controller {

	protected $empresa;
	protected $pro;
	public function __construct(Empresa $empresa, Producto $pro)
	{
		$this->empresa = $empresa;
		$this->pro 	   = $pro;	
	}


	public function getLogin()
	{
		return View::make('login');
	}


		public function logout()
		{
			Auth::logout();

			return Redirect::to('/')->with('message','Session closed');
		}


		public function postLogin()
		{

				//GENERAMOS LAS REGLAS DE VALIDACIÓN PARA EL LOGIN
				$validator = Validator::make(Input::all(),array(
				'email' => 'required|email',
				'password' => 'required'
				)
				);
				//VERIFICAMOS QUE FALLE O NO LA VALIDACIÓN DE LAS REGLAS
				if($validator->fails()){
				//redirigimos al usuario al log in
				return Redirect::route('/login')
				->withErrors($validator)
				->withInput();
				}else{
				$remember = (Input::has('remember')) ? true : false;
				//creamos la sesion del usuario
				$auth = Auth::attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				
				), $remember);
				if($auth){
					if(Auth::user()->UsuTip != 1)

						{
						return Redirect::back()->with('message-alert', 'Ha iniciado sesión correctamente');

						}
						else {
							return Redirect::intended('admin');
						}

					
				}else{
				return Redirect::back()
				->with('message-alert', 'El email o la contraseña no coinciden, o la cuenta no esta activada');
				}
				}
				return Redirect::back()
				->with('message-alert', 'Hubo un problema en el inicio de sesión ');
		}


		public function postLoginCheckout()
	{
		$validator = Validator::make(Input::all(),
				array(
						'email' 		    => 'required|email|unique:users',
						'password'		    => 'required|alpha_num|min:6|confirmed',
						
					

					)
			);


		if($validator->fails())
		{
			return Redirect::back()->withInput()->with('message-alert','Errores en el formulario')->withErrors($validator->messages());
		}

		$user = new User;
		$user->email  		= Input::get('email');
		$user->password  	= Hash::make(Input::get('password'));
		$user->UsuTip 		= 0;
		//$user->condiciones 	= true;

		if($user->save())
		{
						  $remember = (Input::has('remember')) ? true : false;
				//creamos la sesion del usuario
				$auth = Auth::attempt(array(
						'email'  => $user->email,
						'password' => Input::get('password'),
						//'active' => 1
					), $remember);

				if($auth){
					if(Auth::user()->UsuTip == 1)

						{
						return Redirect::back();

						}
						else {
							return Redirect::intended('admin');
						}
				}else{
					return Redirect::route('login')
				->with('message-alert', 'El email o la contraseña no coinciden, o la cuenta no esta activada');
				}
		}
	}

	


}

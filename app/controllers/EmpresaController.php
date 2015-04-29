<?php

class EmpresaController extends Controller {

	protected $empresa;
	protected $pro;
	public function __construct(Empresa $empresa, Producto $pro)
	{
		$this->empresa = $empresa;
		$this->pro 	   = $pro;	
	}

	public function getIndex()
	{
		return View::make('admin.home');
	}

}

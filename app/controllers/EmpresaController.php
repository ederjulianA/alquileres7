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

		$empresa = $this->empresa->getInfo();
		return View::make('admin.home',compact('empresa'));
	}


	public function getParEmp()
	{
		$empresa = $this->empresa->getInfo();
		return View::make('admin.parempresa',compact('empresa'));
	}

}

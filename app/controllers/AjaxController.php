<?php

class AjaxController extends Controller {

	protected $empresa;
	protected $pro;
	public function __construct(Empresa $empresa, Producto $pro)
	{
		$this->empresa = $empresa;
		$this->pro 	   = $pro;	
	}


	public function AjaxActualizar()
	{
		if(isset($_POST['numPer']))
		{

			$numPer = $_POST['numPer'];
			Session::put('cantidad', $numPer);
			foreach (Cart::contents() as $item) {
			   
			    $item->quantity = $numPer;
			}
			$estado = array("estado"=>1);
			return Response::json(array('estado'=>$estado));
		}
	}


	public function AjaxFecha()
	{
		if(isset($_POST['Fecha']))
		{
			$today = date('Y-m-d');
			$Fecha = $_POST['Fecha'];

			if($Fecha >= $today)
			{

				$fechas = array('fecha'=>$Fecha,'today'=>$today);
				$estado = array("estado"=>1);
				Session::put('Fecha', $Fecha);
				return Response::json(array('estado'=>$estado,'fechas'=>$fechas));
			}
			else

			{
				$fechas = array('fecha'=>$Fecha,'today'=>$today);
				$estado = array("estado"=>2);
				return Response::json(array('estado'=>$estado,'fechas'=>$fechas));
			}
		}
	}

}
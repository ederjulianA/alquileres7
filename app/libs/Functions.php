<?php

Class Functions {

	public static function getProdCat($id)
	{
		$productos = Producto::where('CategoryId','=',$id)->get();
	
		$html = '';

		foreach ($productos as $pro) {
			# code...
			$html = '<a>'.$pro->ProNom.'</a> <br>';
		}

		return $html;
	}
}
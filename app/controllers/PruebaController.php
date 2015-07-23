<?php

class  PruebaController extends Controller {

	public function images()
	{

		$serverDate = date('Y-m-d-H-m-s');

		$pro = Producto::whereNull('ProImgLar')->get();
		$num = count($pro);
		
	
		foreach ($pro as $p) {
			 $slug = Str::slug($p->ProNom);
			 //$img = Image::make($pro->ProImg);
			$codigoIMG = str_random(13);
			$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";

			//Image::make($p->ProImg)->resizeCanvas(800, 400, null, false, '#fff')->save(public_path().'/img/products/'.$filename);
			Image::make($p->ProImg)->save(public_path().'/img/products/'.$filename);
			$p->ProImgLar = 'img/products/'.$filename;
			$p->ProSlug = $slug;
			$p->ProFecEdit = $serverDate;
			$p->save();
		}
		
		/*$pro = Producto::where('ProId','>', 0)->first();
		$img = Image::make($pro->ProImg);
		$codigoIMG = str_random(13);
		$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";

		Image::make($pro->ProImg)->resizeCanvas(400, 400, null, true, '#fff')->save(public_path().'/img/products/'.$filename);
		$pro->ProImgLar = 'img/products/'.$filename;
		$pro->save();*/

		$pro2 = Producto::all();
		
		return View::make('prueba.index',compact('pro2'));
	}


}
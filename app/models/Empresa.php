<?php
class Empresa extends Eloquent {

		protected $table = 'empresa';



		//protected $fillable = array('EmpNom','EmpLogo','EmpRazSoc','EmpDesc','EmpTel','EmpDir');

		public function getInfo()
		{
			$empresa = Empresa::where('EmpresaId','=',1)->first();
			return $empresa;
		}
	}
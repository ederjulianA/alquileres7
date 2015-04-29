<?php
class Empresa extends Eloquent {

		protected $table = 'empresa';



		protected $fillable = array('EmpNom','EmpLogo','EmpRazSoc','EmpDesc','EmpTel','EmpDir');

		
	}
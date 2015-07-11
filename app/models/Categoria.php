<?php
class Categoria extends Eloquent {

		protected $table = 'category';
		protected $primaryKey = "CategoryId";

		public function item()
		{
			return $this->belongsTo('Item');
		}

		public function productos()
				{
					//1er parametro Llave foranea en la tabla producto. 2do parametro llave local en la tabla categorias
					return $this->hasMany('Producto','CategoryId','CategoryId');
				}

		

		
	}
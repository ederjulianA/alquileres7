<?php
class Producto extends Eloquent {

		protected $table = 'products';



		public function categoria()
		{
			return $this->belongsTo('Categoria');
		}

		
	}
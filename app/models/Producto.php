<?php
class Producto extends Eloquent {

		protected $table = 'products';

		protected $primaryKey = "ProId";

		public function categoria()
		{
			return $this->belongsTo('Categoria','CategoryId');
		}

		
	}
<?php
class Item extends Eloquent {

		protected $table = 'Items';



			public function categorias()
				{
					return $this->hasMany('Categoria');
				}

		
	}
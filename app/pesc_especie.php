<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesc_especie extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'cat', 'cat_trof'
	];
	

	
	
	protected $table = 'pesc_especie';
}

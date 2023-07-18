<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Details extends Model
{
	use HasFactory;

	/**
	 * Get all of the products for the Details
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function products(): HasMany
	{
		return $this->hasMany(Product::class);
	}
}

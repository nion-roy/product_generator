<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

		/**
		 * Get all of the details for the Brand
		 *
		 * @return \Illuminate\Database\Eloquent\Relations\HasMany
		 */
		public function details(): HasMany
		{
				return $this->hasMany(Details::class);
		}
}

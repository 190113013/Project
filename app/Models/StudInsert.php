<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudInsert extends Model
{
    protected $table = 'customers';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'username', 'surname','phone',
	];

	const UPDATED_AT = null;
	const CREATED_AT = null;
}
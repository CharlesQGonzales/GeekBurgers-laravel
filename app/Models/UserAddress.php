<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAddress
 * 
 * @property int $address_id
 * @property int $user_id
 * @property int $house_number
 * @property string $street
 * @property string $barangay
 * @property int $zipcode
 *
 * @package App\Models
 */
class UserAddress extends Model
{
	protected $table = 'user_address';
	protected $primaryKey = 'address_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'house_number' => 'int',
		'zipcode' => 'int'
	];

	protected $fillable = [
		'user_id',
		'house_number',
		'street',
		'barangay',
		'zipcode'
	];
}

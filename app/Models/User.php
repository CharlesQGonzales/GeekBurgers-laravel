<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_number
 * @property string $email
 * @property Carbon $birthdate
 * @property Carbon $date_registered
 * @property string $role
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $casts = [
		'birthdate' => 'date',
		'date_registered' => 'date'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'mobile_number',
		'email',
		'birthdate',
		'date_registered',
		'role'
	];
}

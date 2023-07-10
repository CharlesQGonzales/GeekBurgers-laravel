<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 * 
 * @property int $od_id
 * @property int $order_id
 * @property int $product_id
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	protected $table = 'order_details';
	protected $primaryKey = 'od_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'product_id'
	];
}

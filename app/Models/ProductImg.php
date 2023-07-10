<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductImg
 * 
 * @property int $img_id
 * @property int $product_id
 * @property string $image
 *
 * @package App\Models
 */
class ProductImg extends Model
{
	protected $table = 'product_imgs';
	protected $primaryKey = 'img_id';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'image'
	];
}

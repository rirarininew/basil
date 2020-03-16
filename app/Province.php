<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Province extends Model
{
	protected $table='indonesia_provinces';
    protected $fillable = ['id', 'name'];

    //public static function populate(){
    //	foreach (RajaOngkir::Provinsi()->all() as $Province) {
    //		$model = static::firstOrNew(['id' => $province['province_id']]);
      //      $model->name = $province['province'];
        //    $model->save();
   // 	}
   // }
}

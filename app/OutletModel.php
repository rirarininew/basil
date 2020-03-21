<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OutletModel extends Model
{
    protected $table='outlet';
    protected $primaryKey='outlet_id';
    protected $fillable=['outlet_name','outlet_address','outlet_city','outlet_province','outlet_contact','outlet_user','outlet_status'];
    
}

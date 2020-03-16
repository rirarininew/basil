<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubsModel extends Model
{
    protected $table='subscription';
    protected $foreignKey='outlet_id';
    protected $fillable=['subs_plan','subs_start','subs_end'];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table='user';
    protected $primaryKey='user_id';
    protected $fillable=['user_email','user_password','role'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_maintainance extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function owened_cars(){
        return $this->belongsTo('App\Models\Owened_cars', 'car_id', 'id');
    }
    public function maintenance_type(){
        return $this->belongsTo('App\Models\Maintenance_type');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primaryKey = 'id';

    public function bill_detail(){
        return $this->hasMany('App\order_detail','id_order','id');
    }

    public function customer(){
        return $this->belongsTo('App\User','id_user','id');
    }
}

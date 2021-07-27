<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id','description','quantity','unit','total',
        'color','size','labor_category','regularly_hours','premium_hours','over_time_hours','double_time','labor_total',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}

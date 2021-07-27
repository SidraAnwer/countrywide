<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'ticket_no','project','job_no','constractor','constractor_sup_name',
        'constractor_sup_sign',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
  
}

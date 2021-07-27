<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'contractor',
        'owner',
    ];


    public function stories()
    {
        return $this->hasMany(Story::class);
    }
    public function appartments()
    {
        return $this->hasMany(Appartments::class);
    }
    
    public function areas()
    {
        return $this->hasMany(Area::class);
    }
    
    public function sketchies()
    {
        return $this->hasMany(Sketche::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

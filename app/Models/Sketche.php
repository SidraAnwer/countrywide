<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sketche extends Model
{
    use HasFactory;

    protected $fillable = [ 'image','path', ];
    
    
     public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

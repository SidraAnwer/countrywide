<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id','name','image',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

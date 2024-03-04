<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'preview',
        'logo',
        'type',
        'github',
        'link',
        'team',
    ];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}

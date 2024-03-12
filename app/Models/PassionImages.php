<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassionImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'passion_id',
    ];

    public function passion()
    {
        return $this->belongsTo(Passion::class);
    }
}

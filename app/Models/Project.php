<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'logo',
        'image',
        'description',
    ];

    public static function getSlug($title)
    {
        $slug = Str::of($title)->slug("-");
        $count = 1;

        // Prendi il primo post il cui slug è uguale a $slug
        // se è presente allora genero un nuovo slug aggiungendo -$count
        while (Project::where("slug", $slug)->first()) {
            $slug = Str::of($title)->slug("-") . "-{$count}";
            $count++;
        }

        return $slug;
    }

}

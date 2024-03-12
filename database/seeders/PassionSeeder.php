<?php

namespace Database\Seeders;

use App\Models\Passion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passions = file_get_contents(__DIR__ . '/data/passions.json');
        $passions = json_decode($passions, true);
        foreach ($passions as $passion) {
            $newPassion = new Passion;
            $newPassion->name = $passion['name'];
            $newPassion->slug = $passion['slug'];
            $newPassion->description = $passion['description'];
            $newPassion->save();
        }

    }
}

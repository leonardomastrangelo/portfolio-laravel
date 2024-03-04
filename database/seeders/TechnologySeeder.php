<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get json and decode
        $technologies = file_get_contents(__DIR__ . '/data/technologies.json');
        $technologies = json_decode($technologies, true);

        // cycle creating technologies
        foreach ($technologies as $technology) {
            $newTechnology = new Technology;
            $newTechnology->name = $technology['name'];
            $newTechnology->slug = $technology['slug'];
            $newTechnology->icon = $technology['icon'];
            $newTechnology->save();

            // sync with projects
            $newTechnology->projects()->sync($technology['project_ids']);
        }
    }
}

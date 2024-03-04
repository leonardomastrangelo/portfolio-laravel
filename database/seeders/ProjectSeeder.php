<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get json and decode
        $projects = file_get_contents(__DIR__ . '/data/projects.json');
        $projects = json_decode($projects, true);

        // cycle creating projects
        foreach ($projects as $project) {
            $newProject = new Project;
            $newProject->title = $project['title'];
            $newProject->slug = $project['slug'];
            $newProject->description = $project['description'];
            $newProject->status = $project['status'];
            $newProject->preview = ProjectSeeder::storeImg($project['preview']);
            $newProject->logo = ProjectSeeder::storeImg($project['logo']);
            $newProject->type = $project['type'];
            $newProject->github = $project['github'];
            $newProject->link = $project['link'];
            $newProject->team = $project['team'];
            $newProject->save();
        }
    }

    /**
     * Store Previews and Logos
     */
    public static function storeImg($url)
    {
        // take img from resources
        $prev = file_get_contents(resource_path('img/' . $url));
        // store img
        Storage::put('public/' . $url, $prev);
        return $url;
    }
}

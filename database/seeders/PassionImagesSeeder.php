<?php

namespace Database\Seeders;

use App\Models\PassionImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PassionImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passionImages = file_get_contents(__DIR__ . '/data/passion_images.json');
        $passionImages = json_decode($passionImages, true);
        foreach ($passionImages as $passionImage) {
            $newPassionImage = new PassionImages;
            $newPassionImage->path = PassionImagesSeeder::storeImg($passionImage['path']);
            $newPassionImage->passion_id = $passionImage['passion_id'];
            $newPassionImage->save();
        }

    }

    /**
     * Store PassionImages
     * 
     * @param string $path
     * @return string $path
     */
    public static function storeImg($path)
    {
        // take img from resources
        $img = file_get_contents(resource_path('img/' . $path));
        // store img
        Storage::put($path, $img);
        return $path;

    }
}

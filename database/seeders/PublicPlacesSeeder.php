<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PublicPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Path to the JSON file
        $filePath = database_path('seeders/simplified_places.json');

        // Check if file exists
        if (!File::exists($filePath)) {
            $this->command->error("JSON file not found at $filePath");
            return;
        }

        // Read the JSON file
        $jsonData = File::get($filePath);
        $places = json_decode($jsonData, true);

        if (!$places) {
            $this->command->error("Failed to decode JSON data.");
            return;
        }

        // Insert the data into the database
        DB::table('public_places')->insert($places);

        $this->command->info(count($places) . " public places seeded successfully.");
    }
}

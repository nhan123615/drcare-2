<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\DiseaseType;
use Illuminate\Database\Seeder;

class DiseaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiseaseType::factory(3)->create()->each(function ($diseaseType) {
            Disease::factory(3)->create(['disease_type_id' => $diseaseType->id]);
        });
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $api = new \App\Models\ApiKey();
        $api->key = \Str::random(40);
        $api->description = "Valid API KEY";
        $api->save();
    }
}

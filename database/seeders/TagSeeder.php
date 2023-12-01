<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Models\Tag();
        $tag->name = 'Daur Ulang';
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->name = 'PET';
        $tag->save();
        
        $tag = new \App\Models\Tag();
        $tag->name = 'HDPE';
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->name = 'PVC';
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->name = 'LDPE';
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->name = 'PP';
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->name = 'PS';
        $tag->save();


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = new \App\Models\User();
        $Admin->name = 'recyclear-admin';
        $Admin->email = 'recyclear@gmail.com';
        $Admin->email_verified_at = now();
        $Admin->password = \Hash::make('recyclear1234');
        $Admin->status = 'freemium';
        $Admin->remember_token = \Str::random(60);
        $Admin->created_at = now();
        $Admin->updated_at = now();
        $Admin->save();
    }
}

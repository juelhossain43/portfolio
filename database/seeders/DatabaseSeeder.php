<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Main;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $main= Main::create([
            'title'=>'Its nice to meet you',
            'sub_title'=>'Welcome to our website',
            'bg_img'=>'storage/img/bg_img.jpg',
            'resume'=>'storage/pdf/resume.pdf',


        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

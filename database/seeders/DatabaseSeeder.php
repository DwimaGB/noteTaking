<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Note::factory(30)->create();
    }
}



<?php

namespace Database\Seeders;

use App\Models\Example;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Example::factory(10)->create();
        User::factory(30)->hasAlunos(1)->create();
        User::factory(10)->hasEstafes(1)->create();
        User::factory(10)->hasInstrutores(1)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todos')->insert([
        [
            'task' => 'Belanja bahan makanan',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'task' => 'Beli buah-buahan',
            'completed' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'task' => 'Selesaikan proyek laravel',
            'completed' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        ]);
    }
}

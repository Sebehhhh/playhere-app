<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Level::create(['level' => 'Admin']);
        Level::create(['level' => 'Pegawai']);
        Level::create(['level' => 'Owner']);
        // Tambahkan data lain jika diperlukan
    }
}

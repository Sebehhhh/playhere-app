<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'level_id' => 1, // Ganti dengan id level yang sesuai
            'nama' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Alamat Admin',
            'nomor_telpon' => '123456789',
            'status' => true,
        ]);
        User::create([
            'level_id' => 2, // Ganti dengan id level yang sesuai
            'nama' => 'Pegawai',
            'username' => 'Pegawai',
            'email' => 'pegawai@example.com',
            'password' => Hash::make('password'),
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Alamat Pegawai',
            'nomor_telpon' => '123456789',
            'status' => true,
        ]);
        User::create([
            'level_id' => 3, // Ganti dengan id level yang sesuai
            'nama' => 'Owner',
            'username' => 'Owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Alamat Owner',
            'nomor_telpon' => '123456789',
            'status' => true,
        ]);
        // Tambahkan data lain jika diperlukan
    }
}

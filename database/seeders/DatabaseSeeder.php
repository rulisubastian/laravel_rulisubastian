<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Patient;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User
        User::create([
            'username' => 'admin',
            'password' => Hash::make('password')
        ]);

        // Hospitals
        $rs1 = Hospital::create([
            'nama' => 'RS Umum A',
            'alamat' => 'Jl. Merdeka No.1',
            'email' => 'rsuma@example.com',
            'telepon' => '0211234567'
        ]);

        $rs2 = Hospital::create([
            'nama' => 'RS Umum B',
            'alamat' => 'Jl. Sudirman No.2',
            'email' => 'rsumb@example.com',
            'telepon' => '0219876543'
        ]);

        // Patients
        Patient::create([
            'nama' => 'Budi',
            'alamat' => 'Bandung',
            'telepon' => '08123456789',
            'hospital_id' => $rs1->id
        ]);

        Patient::create([
            'nama' => 'Ani',
            'alamat' => 'Jakarta',
            'telepon' => '08198765432',
            'hospital_id' => $rs2->id
        ]);
    }
}

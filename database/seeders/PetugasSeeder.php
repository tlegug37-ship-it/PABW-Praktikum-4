<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Lima akun petugas contoh. Password seluruh akun: password123
        for ($i = 1; $i <= 5; $i++) {
            User::updateOrCreate(
                ['email' => "petugas{$i}@bpbd.test"],
                [
                    'name' => $faker->name(),
                    'password' => Hash::make('password123'),
                ]
            );
        }

        // Akun administrator tetap untuk demonstrasi praktikum.
        User::updateOrCreate(
            ['email' => 'admin@bpbd.test'],
            [
                'name' => 'Administrator BPBD',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}

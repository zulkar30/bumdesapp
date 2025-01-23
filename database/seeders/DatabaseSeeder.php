<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create first user (Super Admin)
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('SuperAdmin12345.'),
            'address' => 'Jalan Antara',
            'houseNumber' => 'Antara01',
            'phoneNumber' => '082287354040',
            'city' => 'Bengkalis',
            'roles' => 'ADMIN',
            'picturePath' => null,
        ]);

        // Create second user
        User::factory()->create([
            'name' => 'User Biasa',
            'email' => 'userbiasa@gmail.com',
            'password' => Hash::make('UserBiasa12345.'),
            'address' => 'Jalan Lurus',
            'houseNumber' => 'Lurus02',
            'phoneNumber' => '082123456789',
            'city' => 'Pekanbaru',
            'roles' => 'USER',
            'picturePath' => null,
        ]);

        // Call ProductSeeder
        $this->call(ProductSeeder::class);
    }
}

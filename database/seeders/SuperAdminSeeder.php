<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Peter Patrick', 
            'email' => 'pete@email.com',
            'password' => Hash::make('superman1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'rdas staff', 
            'email' => 'rdas_admin@email.com',
            'password' => Hash::make('rdasadmin1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Austin Powers', 
            'email' => 'austinpowers@email.com',
            'password' => Hash::make('austinpowers1234')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
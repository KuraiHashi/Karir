<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'MUHAMMAD ARIF',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'), // Enkripsi password
            'role' => 'admin',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}

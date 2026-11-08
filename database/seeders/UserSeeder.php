<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'=>'Reham',
            'email'=>'reham2002taha@gmail.com',
            'password'=>Hash::make('Eng*2025'),
            'image'=>'user-avatar.png',
        ]);
    }
}

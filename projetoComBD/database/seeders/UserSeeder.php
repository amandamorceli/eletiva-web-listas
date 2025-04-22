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
    public function run(): void
    {
        User::create([
            'name' => 'Amanda', // 'name'=> $request->name,
            'email' => 'amanda.adm@email.com', // 'email'=> $request->email,
            'password' => Hash::make("123456"), // 'password => Hash::make($request->password)
            'role' => 'ADM', // 'role' => 'ADM'
        ]);

        User::create([
            'name' => "Amanda", //'name' => $reques->name,
            'email' => "amanda.cli@email.com", //'email' => $request->email,
            'password' => Hash::make("123456"), //'password' => Hash::make($request->password),
            'role' => 'CLI', //'role' => 'CLI', 
        ]);
    }
}

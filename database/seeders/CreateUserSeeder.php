<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=
        [
            ['name'=>'User',
            'dni'=>'12345678',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>0
            ],
            ['name'=>'Admin',
            'dni'=>'12345679',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>1
            ],
            ['name'=>'SuperAdmin',
            'dni'=>'12345677',
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>2
            ]             
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}

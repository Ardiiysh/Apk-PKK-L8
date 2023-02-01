<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'superadmin',
                'email'=>'superadmin@gmail.com',
                'role'=>'superadmin',
                'password'=> bcrypt('pkksuperdede'),
            ],
            [
                'name'=>'admin Desa Wk garut',
                'email'=>'admingrt@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('123456'),
                'desa_id' => 1,
            ],
            [
                'name' => 'user Desa Wk garut',
                'email' => 'usergrt@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),
                'desa_id'  =>1,
            ],
            [
                'name'=>'admin Desa Wk Bogor',
                'email'=>'adminbgr@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('123456'),
                'desa_id' => 2,
            ],
            [
                'name' => 'user Desa Wk Bogor',
                'email' => 'userbgr@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),
                'desa_id'  =>2,
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
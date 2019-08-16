<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
            ['name'=>'admin',
            'email'=>'dioguo2@dio.com',
            'password' =>bcrypt('admin'),
            
        ],
        ['name'=>'diogua',
            'email'=>'dioguoz@dio.com',
            'password' =>bcrypt('admin'),
            
    ],
    ['name'=>'dagua',
            'email'=>'dioguoa@dio.com',
            'password' =>bcrypt('zz'),
            
],
['name'=>'2333',
            'email'=>'dioguod@dio.com',
            'password' =>bcrypt('zz'),
            
        ]
        ]
        );
    }
}

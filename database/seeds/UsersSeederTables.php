<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersSeederTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('password'),
        ]);
    }
}

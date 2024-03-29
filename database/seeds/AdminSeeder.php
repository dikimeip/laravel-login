<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diki',
            'email' => 'diki@gmail.com',
            'password' => Hash::make('diki'),
            'roles_id' => 1,
            'username' => 'dikis'
        ]);
    }
}

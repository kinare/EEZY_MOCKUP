<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            [
                'name' => 'Eezy Test',
                'email' => 'test@eezy.com',
                'password' => Hash::make('allowme@1'),

            ]
        ]);
    }
}

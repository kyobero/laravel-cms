<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'chobe@gmail.com')->first();

        if (!$user) {

            User::create([
                'name' => 'Ronald Chobe',

                'email' => 'chobe@gmail.com',

                'role' => 'admin',

                'password' => Hash::make('password')
            ]);
        }
    }
}

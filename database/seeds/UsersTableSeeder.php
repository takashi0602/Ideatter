<?php

use App\User;
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
        User::truncate();

        $name = [
          'サル', 'ゴリラ', 'チンパンジー'
        ];

        $email = [
          'monkey@monkey.com', 'gorilla@gorilla.com', 'chimpanzee@chimpanzee.com'
        ];

        $password = [
          'passWord1', 'passWord2', 'passWord3'
        ];

        for($i = 0; $i < 3; $i++) {
          DB::table('users')->insert([
            'name' => $name[$i],
            'email' => $email[$i],
            'password' => bcrypt($password[$i])
          ]);
        }

    }
}

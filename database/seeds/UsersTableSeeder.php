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
          '山田太郎', '田中花子', '鈴木一郎', '香川真司', '元木大介'
        ];

        $email = [
          'idea1-tter@idea.com', 'idea2-tter@idea.com', 'idea3-tter@idea.com', 'idea4-tter@idea.com', 'idea5-tter@idea.com'
        ];

        $password = [
          'passWord1', 'passWord2', 'passWord3', 'passWord4', 'passWord5'
        ];

        for($i = 0; $i < 5; $i++) {
          DB::table('users')->insert([
            'name' => $name[$i],
            'email' => $email[$i],
            'password' => bcrypt($password[$i]),
            'created_at' => time(),
            'updated_at' => time()
          ]);
        }

    }
}

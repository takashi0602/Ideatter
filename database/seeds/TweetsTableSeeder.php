<?php

use App\Tweet;
use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tweet::truncate();

        $user_id = [
          '1', '2', '3'
        ];

        $title = [
          'hoge', 'piyo', 'pico'
        ];

        $description = [
          'hogehogehogehoge', 'piyopiyopiyopiyo', 'picopicopicopico'
        ];

        for($i = 0; $i < 3; $i++) {
          DB::table('tweets')->insert([
            'user_id' => $user_id[$i],
            'title' => $title[$i],
            'description' => $description[$i]
          ]);
        }

    }
}

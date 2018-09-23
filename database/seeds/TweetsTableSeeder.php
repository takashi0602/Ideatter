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
          '1', '5', '2', '3', '4'
        ];

        $title = [
          'C言語で〇〇', 'Unityでゲーム開発', '勉強効率をあげる', '画期的な大発明', 'チーム開発'
        ];

        $description = [
          'C言語で〇〇しよう。',
          'Unityでゲーム開発するときに知っておくと便利な...',
          '勉強効率をあげるには短時間で...',
          '画期的な大発明をしました。',
          'チーム開発で役立つアイデアを...'
        ];

        for($i = 0; $i < 5; $i++) {
          DB::table('tweets')->insert([
            'user_id' => $user_id[$i],
            'title' => $title[$i],
            'description' => $description[$i],
            'created_at' => time(),
            'updated_at' => time()
          ]);
        }

    }
}

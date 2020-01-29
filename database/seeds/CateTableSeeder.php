<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Cate;

class CateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cates')->insert([
            [
                'cates_id'           => uniqid(),
                'cates_name'      => '一般',
            ],
            [
                'cates_id'           => uniqid(),
                'cates_name'      => 'スポーツ',
            ],
            [
                'cates_id'           => uniqid(),
                'cates_name'      => 'グルメ',
            ],
            [
                'cates_id'           => uniqid(),
                'cates_name'      => 'オカルト',
            ],
            [
                'cates_id'           => uniqid(),
                'cates_name'      => 'ビジネス',
            ],
            [
                'cates_id'           => uniqid(),
                'cates_name'      => 'ゲーム',
            ],
            [
                'cates_id'           => uniqid(),
                'cates_name'      => '恋愛',
            ],
        ]);
    }
}

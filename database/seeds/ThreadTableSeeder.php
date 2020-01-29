<?php

use Illuminate\Database\Seeder;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('threads')->insert([
            [
                'threads_id'           => uniqid(),
                'title'      => '【悲報】ネトウヨさん、新型肺炎に便乗して中国ヘイト＆怪しい情報を拡散してしまう',
                'created_at'      => new DateTime(),
                'cates_id'      => '5e310e63afbcf',
            ],
        ]);
    }
}

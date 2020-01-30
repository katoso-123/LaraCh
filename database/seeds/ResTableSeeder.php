<?php

use Illuminate\Database\Seeder;

class ResTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('res')->insert([
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '高知かな',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '沖縄だろ',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '福井',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '島根',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '鹿児島',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => 'それ知名度がないだけや',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '観光客居なそうな県、つまり鳥取やな',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '鳥取',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '孤立してる県',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '富山あたり',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '鳥取',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '鳥取は砂丘があるから、島根のがなさそう',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '栃木',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
            [
                'res_id'          => uniqid(),
                'threads_id'      => 1,
                'body'            => '宮崎だから',
                'name'            => '名無し',
                'created_at'      => new DateTime(),
                'updated_at'      => new DateTime(),
            ],
        ]);
    }
}

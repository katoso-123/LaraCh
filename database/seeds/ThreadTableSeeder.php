<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Thread;

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
                'threads_id' => 1,
                'title'      => 'コロナウイルス最後まで感染者が出ない県どこか予想しようぜ',
                'res_count'  => 14,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
                'cates_name' => '一般',
            ],
        ]);
    }
}

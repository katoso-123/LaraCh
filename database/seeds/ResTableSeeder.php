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

                'res_id'           => 1,
                'threads_id'      => 1,
                'body'           =>'hello',
                'create_at'      =>new DateTime(),
        ]);

    }
}

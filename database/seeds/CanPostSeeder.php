<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;
use APP\Can_post;

class CanPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("can_post")->insert(["can_post"=>1
    ])
    }
}

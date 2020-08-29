<?php

use Illuminate\Database\Seeder;
use App\group;
class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        group::insert([
        	['name'=>'Group H'],
        	['name'=>'Group z'],
            ['name'=>'Group Q']
        ]);
    }
}

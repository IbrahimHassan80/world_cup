<?php

use Illuminate\Database\Seeder;
use App\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	['name'=>'zyad',
        	'email'=>'zzo@yahoo.com',
        	'password'=> Hash::make('123456789')],

            ['name'=>'hesham',
            'email'=>'hhh@yahoo.com',
            'password'=> Hash::make('12345678')],
        ]);
    }
}

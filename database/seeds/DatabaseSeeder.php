<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	//	$this->call(GroupSeeder::class);
    	//	$this->call(userSeeder::class);
    	//	$this->call(countrySeeder::class);
            $this->call(postseeder::class);
    }
}

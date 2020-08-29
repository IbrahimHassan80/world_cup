<?php

use Illuminate\Database\Seeder;
use App\country;
class countrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        country::insert([
        	['country_code'=> 'spp', 'name'=>'spainn'],
        	['country_code'=> 'usaa', 'name'=>'americaa']

        ]);
    }
}

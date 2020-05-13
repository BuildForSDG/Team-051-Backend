<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        DB::table('countries')->insert([
            [
                'iso' => 'ng',
                'iso3' => 'nga',
                'fips' => 'ni',
                'name' => 'nigeria',
                'continent' => 'af',
                'currency_code' => 'ngn',
                'currency_name' => 'naira',
                'phone_prefix' => '234',
                'postal_code' => '^(d{6})$',
                'languages' => 'en-ng,ha,yo,ig,ff',
                'geonameid' => '2328926',
                'status' => 'enabled',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ]
        ]);


    }
}

<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->delete();

        \DB::table('states')->insert(array (

            ['id' => 1, 'name' => 'abia', 'slug' => 'abia', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 2, 'name' => 'adamawa', 'slug' => 'adamawa', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 3, 'name' => 'akwa ibom', 'slug' => 'akwa_ibom', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 4, 'name' => 'anambra', 'slug' => 'anambra', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 5, 'name' => 'bauchi', 'slug' => 'bauchi', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 6, 'name' => 'bayelsa', 'slug' => 'bayelsa', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 7, 'name' => 'benue', 'slug' => 'benue', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 8, 'name' => 'borno', 'slug' => 'borno', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 9, 'name' => 'cross river', 'slug' => 'cross_river', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 10, 'name' => 'delta', 'slug' => 'delta', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 11, 'name' => 'ebonyi', 'slug' => 'ebonyi', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 12, 'name' => 'edo', 'slug' => 'edo', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 13, 'name' => 'ekiti', 'slug' => 'ekiti', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 14, 'name' => 'enugu', 'slug' => 'enugu', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 15, 'name' => 'fct', 'slug' => 'fct', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 16, 'name' => 'gombe', 'slug' => 'gombe', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 17, 'name' => 'imo', 'slug' => 'imo', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 18, 'name' => 'jigawa', 'slug' => 'jigawa', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 19, 'name' => 'kaduna', 'slug' => 'kaduna', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 20, 'name' => 'kano', 'slug' => 'kano', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 21, 'name' => 'katsina', 'slug' => 'katsina', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 22, 'name' => 'kebbi', 'slug' => 'kebbi', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 23, 'name' => 'kogi', 'slug' => 'kogi', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 24, 'name' => 'kwara', 'slug' => 'kwara', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 25, 'name' => 'lagos', 'slug' => 'lagos', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 26, 'name' => 'nasarawa', 'slug' => 'nasarawa', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 27, 'name' => 'niger', 'slug' => 'niger', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 28, 'name' => 'ogun', 'slug' => 'ogun', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 29, 'name' => 'ondo', 'slug' => 'ondo', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 30, 'name' => 'osun', 'slug' => 'osun', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 31, 'name' => 'oyo', 'slug' => 'oyo', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 32, 'name' => 'plateau', 'slug' => 'plateau', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 33, 'name' => 'rivers', 'slug' => 'rivers', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 34, 'name' => 'sokoto', 'slug' => 'sokoto', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 35, 'name' => 'taraba', 'slug' => 'taraba', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 36, 'name' => 'yobe', 'slug' => 'yobe', 'status' =>'enabled', 'country_iso' =>'ng'],
            ['id' => 37, 'name' => 'zamfara', 'slug' => 'zamfara', 'status' =>'enabled', 'country_iso' =>'ng'],
        ));
    }
}

<?php

use Illuminate\Database\Seeder;

class LgasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {



    \DB::table('lgas')->delete();
        
        \DB::table('lgas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'aba north',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'aba south',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'arochukwu',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'bende',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ikwuano',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'isiala ngwa north',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'isiala ngwa south',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'isuikwuato',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'obi ngwa',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'ohafia',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'osisioma',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ugwunagbo',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ukwa east',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'ukwa west',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'umuahia north',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'umuahia south',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'umu nneochi',
                'state_id' => 1, 'state_slug' => 'abia',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'demsa',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'fufure',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'ganye',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'gayuk',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'gombi',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'grie',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'hong',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'jada',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'larmurde',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'madagali',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'maiha',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'mayo belwa',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'michika',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'mubi north',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'mubi south',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'numan',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'shelleng',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'song',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'toungo',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'yola north',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'yola south',
                'state_id' => 2, 'state_slug' => 'adamawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'abak',
                'state_id' => 3, 'state_slug' => 'akwa_ibom', 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'eastern obolo',
                'state_id' => 3, 'state_slug' => 'akwa_ibom', 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'eket',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'esit eket',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'essien udim',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'etim ekpo',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'etinan',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'ibeno',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'ibesikpo asutan',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'ibiono-ibom',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'ika',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'ikono',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'ikot abasi',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'ikot ekpene',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'ini',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'itu',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'mbo',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'mkpat-enin',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'nsit-atai',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'nsit-ibom',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'nsit-ubium',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'obot akara',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'okobo',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'onna',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'oron',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'oruk anam',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'udung-uko',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'ukanafun',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'uruan',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'urue-offong/oruko',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'uyo',
                'state_id' => 3, 'state_slug' => 'akwa_ibom',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'aguata',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'anambra east',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'anambra west',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'anaocha',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'awka north',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'awka south',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'ayamelum',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'dunukofia',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'ekwusigo',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'idemili north',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'idemili south',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'ihiala',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'njikoka',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'nnewi north',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'nnewi south',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'ogbaru',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'onitsha north',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'onitsha south',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'orumba north',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'orumba south',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'oyi',
                'state_id' => 4, 'state_slug' => 'anambra',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'alkaleri',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'bauchi',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'bogoro',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'damban',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'darazo',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'dass',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'gamawa',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'ganjuwa',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'giade',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'itas/gadau',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'jama\'are',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'katagum',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'kirfi',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'misau',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'ningi',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'shira',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'tafawa balewa',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'toro',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'warji',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'zaki',
                'state_id' => 5, 'state_slug' => 'bauchi ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'brass',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'ekeremor',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'kolokuma/opokuma',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'nembe',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'ogbia',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'sagbama',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'southern ijaw',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'yenagoa',
                'state_id' => 6, 'state_slug' => 'bayelsa ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'agatu',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'apa',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'ado',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'buruku',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'gboko',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'guma',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'gwer east',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'gwer west',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'katsina-ala',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'konshisha',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'kwande',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'logo',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'makurdi',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'obi',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'ogbadibo',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'ohimini',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'oju',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'okpokwu',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'oturkpo',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'tarka',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'ukum',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'ushongo',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'vandeikya',
                'state_id' => 7, 'state_slug' => 'benue  ',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'abadam',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'askira/uba',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'bama',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'bayo',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'biu',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'chibok',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'damboa',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'dikwa',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'gubio',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'guzamala',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'gwoza',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'hawul',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'jere',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'kaga',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'kala/balge',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'konduga',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'kukawa',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'kwaya kusar',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'mafa',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'magumeri',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'maiduguri',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'marte',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'mobbar',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'monguno',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'ngala',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'nganzai',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'shani',
                'state_id' => 8, 'state_slug' => 'borno',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'abi',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'akamkpa',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'akpabuyo',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'bakassi',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'bekwarra',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'biase',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'boki',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'calabar municipal',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'calabar south',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'etung',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'ikom',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'obanliku',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'obubra',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'obudu',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'odukpani',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'ogoja',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'yakuur',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'yala',
                'state_id' => 9, 'state_slug' => 'cross_river',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'aniocha north',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'aniocha south',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'bomadi',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'burutu',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'ethiope east',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'ethiope west',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'ika north east',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'ika south',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'isoko north',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'isoko south',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'ndokwa east',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'ndokwa west',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'okpe',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'oshimili north',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'oshimili south',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'patani',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'sapele, delta',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'udu',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'ughelli north',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'ughelli south',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'ukwuani',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'uvwie',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'warri north',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'warri south',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'warri south west',
                'state_id' => 10, 'state_slug' => 'delta',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'abakaliki',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'afikpo north',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'afikpo south',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'ebonyi',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'ezza north',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'ezza south',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'ikwo',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'ishielu',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'ivo',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'izzi',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'ohaozara',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'ohaukwu',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'onicha',
                'state_id' => 11, 'state_slug' => 'ebonyi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'akoko-edo',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'egor',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'esan central',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'esan north-east',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'esan south-east',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'esan west',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'etsako central',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'etsako east',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'etsako west',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'igueben',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'ikpoba okha',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'orhionmwon',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'oredo',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'ovia north-east',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'ovia south-west',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'owan east',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'owan west',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'uhunmwonde',
                'state_id' => 12, 'state_slug' => 'edo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'ado ekiti',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'efon',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'ekiti east',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'ekiti south-west',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'ekiti west',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'emure',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'gbonyin',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'ido osi',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'ijero',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'ikere',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'ikole',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'ilejemeje',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'irepodun/ifelodun',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'ise/orun',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'moba',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'oye',
                'state_id' => 13, 'state_slug' => 'ekiti',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'aninri',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'awgu',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'enugu east',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'enugu north',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'enugu south',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'ezeagu',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'igbo etiti',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'igbo eze north',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'igbo eze south',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'isi uzo',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'nkanu east',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'nkanu west',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'nsukka',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'oji river',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'udenu',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'udi',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'uzo uwani',
                'state_id' => 14, 'state_slug' => 'enugu',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'abaji',
                'state_id' => 15, 'state_slug' => 'fct',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'bwari',
                'state_id' => 15, 'state_slug' => 'fct',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'gwagwalada',
                'state_id' => 15, 'state_slug' => 'fct',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'kuje',
                'state_id' => 15, 'state_slug' => 'fct',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'kwali',
                'state_id' => 15, 'state_slug' => 'fct',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'municipal area council',
                'state_id' => 15, 'state_slug' => 'fct',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'akko',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'balanga',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'billiri',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'dukku',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'funakaye',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'gombe',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'kaltungo',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'kwami',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'nafada',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'shongom',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'yamaltu/deba',
                'state_id' => 16, 'state_slug' => 'gombe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'aboh mbaise',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'ahiazu mbaise',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'ehime mbano',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'ezinihitte',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'ideato north',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'ideato south',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'ihitte/uboma',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'ikeduru',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'isiala mbano',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'isu',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'mbaitoli',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'ngor okpala',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'njaba',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'nkwerre',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'nwangele',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'obowo',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'oguta',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'ohaji/egbema',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'okigwe',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'orlu',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'orsu',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'oru east',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'oru west',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'owerri municipal',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'owerri north',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'owerri west',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'unuimo',
                'state_id' => 17, 'state_slug' => 'imo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'auyo',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'babura',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'biriniwa',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'birnin kudu',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'buji',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'dutse',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'gagarawa',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'garki',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'gumel',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'guri',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'gwaram',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'gwiwa',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'hadejia',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'jahun',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'kafin hausa',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'kazaure',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'kiri kasama',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'kiyawa',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'kaugama',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'maigatari',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'malam madori',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'miga',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'ringim',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'roni',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'sule tankarkar',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'taura',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'yankwashi',
                'state_id' => 18, 'state_slug' => 'jigawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'birnin gwari',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'chikun',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'giwa',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'igabi',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'ikara',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'jaba',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'jema\'a',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'kachia',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'kaduna north',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'kaduna south',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'kagarko',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'kajuru',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'kaura',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'kauru',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'kubau',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'kudan',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'lere',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'makarfi',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'sabon gari',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'sanga',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'soba',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'zangon kataf',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'zaria',
                'state_id' => 19, 'state_slug' => 'kaduna',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'ajingi',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'albasu',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'bagwai',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'bebeji',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'bichi',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'bunkure',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'dala',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'dambatta',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'dawakin kudu',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'dawakin tofa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'doguwa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'fagge',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'gabasawa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'garko',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'garun mallam',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'gaya',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'gezawa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'gwale',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'gwarzo',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'kabo',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'kano municipal',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'karaye',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'kibiya',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'kiru',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'kumbotso',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'kunchi',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'kura',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'madobi',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'makoda',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'minjibir',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'nasarawa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'rano',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'rimin gado',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'rogo',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'shanono',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'sumaila',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'takai',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'tarauni',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'tofa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'tsanyawa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'tudun wada',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'ungogo',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'warawa',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'wudil',
                'state_id' => 20, 'state_slug' => 'kano',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'bakori',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'batagarawa',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'batsari',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'baure',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'bindawa',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'charanchi',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'dandume',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'danja',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'dan musa',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'daura',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'dutsi',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'dutsin ma',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'faskari',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'funtua',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'ingawa',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'jibia',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'kafur',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'kaita',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'kankara',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'kankia',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'katsina',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'kurfi',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'kusada',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'mai\'adua',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'malumfashi',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'mani',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'mashi',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'matazu',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'musawa',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'rimi',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'sabuwa',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'safana',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'sandamu',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'zango',
                'state_id' => 21, 'state_slug' => 'katsina',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'aleiro',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'arewa dandi',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'argungu',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'augie',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'bagudo',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'birnin kebbi',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'bunza',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'dandi',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'fakai',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'gwandu',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'jega',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'kalgo',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'koko/besse',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'maiyama',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'ngaski',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'sakaba',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'shanga',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'suru',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'wasagu/danko',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'yauri',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'zuru',
                'state_id' => 22, 'state_slug' => 'kebbi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'adavi',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'ajaokuta',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'ankpa',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'bassa',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'dekina',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'ibaji',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'idah',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'igalamela odolu',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'ijumu',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'kabba/bunu',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'kogi',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'lokoja',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'mopa muro',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'ofu',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'ogori/magongo',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'okehi',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'okene',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'olamaboro',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'omala',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'yagba east',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'yagba west',
                'state_id' => 23, 'state_slug' => 'kogi',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'asa',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'baruten',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'edu',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'ekiti, kwara state',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'ifelodun',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'ilorin east',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'ilorin south',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'ilorin west',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'irepodun',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'isin',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'kaiama',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('lgas')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'moro',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'offa',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'oke ero',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'oyun',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'pategi',
                'state_id' => 24, 'state_slug' => 'kwara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'agege',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'ajeromi-ifelodun',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'alimosho',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'amuwo-odofin',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'apapa',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'badagry',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'epe',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'eti osa',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'ibeju-lekki',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'ifako-ijaiye',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'ikeja',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'ikorodu',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'kosofe',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'lagos island',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'lagos mainland',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'mushin',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'ojo',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'oshodi-isolo',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'shomolu',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'surulere, lagos state',
                'state_id' => 25, 'state_slug' => 'lagos',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'akwanga',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'awe',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'doma',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'karu',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'keana',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'keffi',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'kokona',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'lafia',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'nasarawa',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'nasarawa egon',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'obi',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'toto',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'wamba',
                'state_id' => 26, 'state_slug' => 'nasarawa',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'agaie',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'agwara',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'bida',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'borgu',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'bosso',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'chanchaga',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'edati',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'gbako',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'gurara',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'katcha',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'kontagora',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'lapai',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'lavun',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'magama',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'mariga',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'mashegu',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'mokwa',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'moya',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'paikoro',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'rafi',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'rijau',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'shiroro',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'suleja',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'tafa',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'wushishi',
                'state_id' => 27, 'state_slug' => 'niger',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'abeokuta north',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'abeokuta south',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'ado-odo/ota',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'egbado north',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'egbado south',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'ewekoro',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'ifo',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'ijebu east',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'ijebu north',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'ijebu north east',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'ijebu ode',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'ikenne',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'imeko afon',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'ipokia',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'obafemi owode',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'odeda',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'odogbolu',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'ogun waterside',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'remo north',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'shagamu',
                'state_id' => 28, 'state_slug' => 'ogun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'akoko north-east',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'akoko north-west',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'akoko south-west',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'akoko south-east',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'akure north',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'akure south',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'ese odo',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'idanre',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'ifedore',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'ilaje',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'ile oluji/okeigbo',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'irele',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'odigbo',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'okitipupa',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'ondo east',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'ondo west',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'ose',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'owo',
                'state_id' => 29, 'state_slug' => 'ondo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'atakunmosa east',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'atakunmosa west',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'aiyedaade',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'aiyedire',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'boluwaduro',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'boripe',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'ede north',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'ede south',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'ife central',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'ife east',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'ife north',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'ife south',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'egbedore',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'ejigbo',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'ifedayo',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'ifelodun',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'ila',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'ilesa east',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'ilesa west',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'irepodun',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'irewole',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'isokan',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'iwo',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'obokun',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'odo otin',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'ola oluwa',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'olorunda',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'oriade',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'orolu',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'osogbo',
                'state_id' => 30, 'state_slug' => 'osun',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'afijio',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'akinyele',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'atiba',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'atisbo',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'egbeda',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'ibadan north',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'ibadan north-east',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'ibadan north-west',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'ibadan south-east',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'ibadan south-west',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'ibarapa central',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'ibarapa east',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'ibarapa north',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'ido',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'irepo',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'iseyin',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'itesiwaju',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'iwajowa',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'kajola',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'lagelu',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'ogbomosho north',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'ogbomosho south',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'ogo oluwa',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'olorunsogo',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'oluyole',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'ona ara',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'orelope',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'ori ire',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'oyo',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'oyo east',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'saki east',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'saki west',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'surulere, oyo state',
                'state_id' => 31, 'state_slug' => 'oyo',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'bokkos',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'barkin ladi',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'bassa',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'jos east',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'jos north',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'jos south',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'kanam',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'kanke',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'langtang south',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'langtang north',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'mangu',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'mikang',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'pankshin',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'qua\'an pan',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'riyom',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'shendam',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'wase',
                'state_id' => 32, 'state_slug' => 'plateau',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'abua/odual',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'ahoada east',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'ahoada west',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'akuku-toru',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'andoni',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'asari-toru',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'bonny',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'degema',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'eleme',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'emuoha',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'etche',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'gokana',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'ikwerre',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'khana',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'obio/akpor',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'ogba/egbema/ndoni',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'ogu/bolo',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'okrika',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'omuma',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'opobo/nkoro',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'oyigbo',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'port harcourt',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'tai',
                'state_id' => 33, 'state_slug' => 'rivers',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'binji',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'bodinga',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'dange shuni',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'gada',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'goronyo',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'gudu',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'gwadabawa',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'illela',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'isa',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'kebbe',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'kware',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'rabah',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'sabon birni',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'shagari',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'silame',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'sokoto north',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'sokoto south',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'tambuwal',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'tangaza',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'tureta',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'wamako',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'wurno',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'yabo',
                'state_id' => 34, 'state_slug' => 'sokoto',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'ardo kola',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'bali',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'donga',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'gashaka',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'gassol',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'ibi',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'jalingo',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'karim lamido',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'kumi',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'lau',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'sardauna',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'takum',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'ussa',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'wukari',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'yorro',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'zing',
                'state_id' => 35, 'state_slug' => 'taraba',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'bade',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'bursari',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'damaturu',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'fika',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'fune',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'geidam',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'gujba',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'gulani',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'jakusko',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'karasuwa',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'machina',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'nangere',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'nguru',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'potiskum',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'tarmuwa',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'yunusari',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'yusufari',
                'state_id' => 36, 'state_slug' => 'yobe',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'anka',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'bakura',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'birnin magaji/kiyaw',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'bukkuyum',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'bungudu',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'gummi',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'gusau',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'kaura namoda',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'maradun',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'maru',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'shinkafi',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'talata mafara',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'chafe',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'zurmi',
                'state_id' => 37, 'state_slug' => 'zamfara',
                'status' => 'enabled', 'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
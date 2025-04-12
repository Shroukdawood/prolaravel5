<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Productes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(('Productes'))->insert([[
            'id'=>'1',
            'name'=>'bike',
            'Price'=>'500',
            'Category'=>'bike',
            'Detailes'=>'faster bike'
        ],
        [
            'id'=>'2',
            'name'=>'phone',
            'Price'=>'500',
            'Category'=>'Phone',
            'Detailes'=>'phone'
        ],
        [
            'id'=>'3',
            'name'=>'acsessory bike',
            'Price'=>'500',
            'Category'=>'acsessory bike',
            'Detailes'=>'acsessory bike'
        ],
        [
            'id'=>'4',
            'name'=>'bike',
            'Price'=>'500',
            'Category'=>'bike',
            'Detailes'=>'faster bike'
        ]]);
    }
}

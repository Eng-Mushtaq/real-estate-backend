<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealEstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $real_estates=[
           [
             'unit_type_id'=>'1',
            'unit_type'=>'شقه',
            'annual_rent'=>2000,
            'currency_code'=>'ر.س',
            'location_description'=>'يقع هذا المنزل الفاخر في حي هادئ ومأهول بالأشجار، على مقربة من المدارس والمتنزهات ومراكز التسوق.',
           'lang'=> '15.344974760399367',
           'lat'=> '44.185273230689425'
        ],

           [
             'unit_type_id'=>'2',
            'unit_type'=>'شقه',
            'annual_rent'=>2000,
            'currency_code'=>'ر.س',
            'location_description'=>'يقع هذا المنزل الفاخر في حي هادئ ومأهول بالأشجار، على مقربة من المدارس والمتنزهات ومراكز التسوق.',
           'lang'=> '15.344974760399367',
           'lat'=> '44.185273230689425'
        ],
           [ 
            'unit_type_id'=>'3',
            'unit_type'=>'شقه',
            'annual_rent'=>2000,
            'currency_code'=>'ر.س',
            'location_description'=>'يقع هذا المنزل الفاخر في حي هادئ ومأهول بالأشجار، على مقربة من المدارس والمتنزهات ومراكز التسوق.',
           'lang'=> '15.344974760399367',
           'lat'=> '44.185273230689425'
        ],
        ];
        
        DB::table('real_estates')->insert($real_estates);
    }
}

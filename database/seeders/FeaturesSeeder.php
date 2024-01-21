<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $featchers=[
            [
                'real_estate_id'=>1,
                'rooms_count'=>4,
                'pathroom_count'=>3,
                'salon_count'=>1,
                'has_parking'=>true,
                'parking_count'=>1,
                'real_estate_description'=>'شقة بتصميم فريد يجمع بين الطابع الكلاسيكي واللمسات الحديثة.
                المساحات الكبيرة والنوافذ الكبيرة تخلق أجواءً مشرقة وودية.',
                'real_estate_equipment'=>'الأرضيات الرخامية والتشطيبات الفاخرة تضفي لمسة من الفخامة.
                نظام تدفئة وتبريد مركزي.'
            ],

        ];
        DB::table('features')->insert($featchers);
    }
}

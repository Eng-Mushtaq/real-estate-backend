<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conditions=[
            [
                'real_estate_id'=>1,
                'insurance'=>'تأمين مسترد قابل للتجديد بقيمة [10000] ريال سعودي.',
                'start_contract'=>'2024-01-01',
                'end_contract'=>'2025-01-01',
                'financial_responsibilities'=>'المستأجر مسؤول عن سداد جميع الفواتير المتعلقة بالمرافق (كهرباء، ماء، غاز).',
                'residential_use'=>'الشقة مخصصة للاستخدام السكني فقط ويجب استخدامها بطريقة قانونية وآمنة.',
                'maintenance_and_repairs'=>'الشركة مسؤولة عن الصيانة الأساسية، والمستأجر مسؤول عن الصيانة اليومية وأية إصلاحات تكون ناتجة عن سوء استخدامه.',
                'cancellation_terms'=>'يمكن لأي طرف إلغاء العقد بإشعار مسبق بـ شهر، ويتم تحديد غرامة5000 ر.س في حالة إلغاء المستأجر قبل انتهاء فترة العقد.',


            ]
        ];
        DB::table('booking_conditions')->insert($conditions);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('real_estate_id');
            $table->string('insurance')->nullable()->comment('التأمين');
            $table->date('start_contract')->nullable()->comment('بداية العقد');
            $table->date('end_contract')->nullable()->comment('نهاية العقد');
            $table->string('financial_responsibilities')->nullable('المسؤوليات الماليه');
            $table->string('residential_use')->nullable()->comment('الاستخدام السكني');
            $table->string('maintenance_and_repairs')->nullable()->comment('الصيانه والاصلاحات');
            $table->string('cancellation_terms')->nullable()->comment('شروط الالغاء');
            $table->string('residential_class')->nullable()->comment('شروط الالغاء');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_conditions');
    }
};

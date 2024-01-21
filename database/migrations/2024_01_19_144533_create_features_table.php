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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('real_estate_id');
            $table->integer('rooms_count')->nullable()->comment('عدد الغرف');
            $table->integer('pathroom_count')->nullable()->comment('عدد الحمامات');
            $table->integer('salon_count')->nullable()->comment('عدد الصالون');
            $table->integer('kitchen_count')->nullable()->comment('عدد المطابخ');
            $table->boolean('has_parking')->nullable()->comment('يتضمن موقف سيارات');
            $table->integer('parking_count')->nullable()->comment('عدد مواقف السيارات');
            $table->string('real_estate_description')->nullable()->comment('وصف التصميم');
            $table->string('real_estate_equipment')->nullable()->comment('التجهيزات');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};

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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('evidence_number')->nullable();
            $table->integer('age')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('country')->nullable();
            $table->string('sex')->nullable();
            $table->string('others')->nullable();
            $table->string('address')->nullable();
            $table->string('coordinator_first_name')->nullable();
            $table->string('coordinator_last_name')->nullable();
            $table->date('adoption_start_date')->nullable();
            $table->date('adoption_end_date')->nullable();
            $table->integer('length_of_adoption')->nullable();
            $table->integer('remaining_days_of_adoption')->nullable();
            $table->string('group')->nullable();
            $table->string('adopter_first_name')->nullable();
            $table->string('adopter_last_name')->nullable();
            $table->string('adopter_city')->nullable();
            $table->string('adopter_type')->nullable();
            $table->string('adopter_type_name')->nullable();
            $table->string('adopter_email')->nullable();
            $table->string('adopter_phone')->nullable();
            $table->string('flag_comandory')->nullable();
            $table->string('image_url')->nullable();
            $table->string('one_time_pay')->nullable();
            $table->string('first_pay')->nullable();
            $table->string('second_pay')->nullable();
            $table->string('third_pay')->nullable();
            $table->string('forth_pay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};

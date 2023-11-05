<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_times', function (Blueprint $table) {
            $table->id();
            $table->string('monday_start', 5);
            $table->string('monday_end', 5);
            $table->string('tuesday_start', 5);
            $table->string('tuesday_end', 5);
            $table->string('wednesday_start', 5);
            $table->string('wednesday_end', 5);
            $table->string('thursday_start', 5);
            $table->string('thursday_end', 5);
            $table->string('friday_start', 5);
            $table->string('friday_end', 5);
            $table->string('saturday_start', 5);
            $table->string('saturday_end', 5);
            $table->string('sunday_start', 5);
            $table->string('sunday_end', 5);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_times');
    }
};

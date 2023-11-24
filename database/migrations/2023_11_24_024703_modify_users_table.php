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
        //カラムの削除
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('name');
        });
        
         //カラムの追加
        Schema::table('users', function (Blueprint $table) {
            //
            $table->softDeletes();
            $table->string('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

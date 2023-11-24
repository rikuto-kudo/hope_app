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
        Schema::table('city_town_villages', function (Blueprint $table) {
            //
            //「外部キー制約の設定」
            //foreign('カラム名')は外部キーの設定
            //references('id')は外部キーが参照先のカラム(id)の指定
            //on('areas')は 外部キーが参照するテーブル
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('city_town_villages', function (Blueprint $table) {
            //
        });
    }
};

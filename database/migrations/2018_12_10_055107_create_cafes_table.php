<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');//x详细地址
            $table->string('city');//所在城市
            $table->string('state');//所在的省份
            $table->string('zip');//邮政编码
            $table->decimal('latitude', 11, 8);//纬度
            $table->decimal('longitude', 11, 8);//经度
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafes');
    }
}

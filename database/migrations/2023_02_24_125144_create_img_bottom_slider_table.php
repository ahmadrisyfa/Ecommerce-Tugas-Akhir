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
        Schema::create('img_bottom_slider', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->mediumText('description_1')->nullable();
            $table->string('image_1');
            $table->tinyInteger('status_1')->default('0')->comment('1=Sembunyikan,0=Tampilkan');
            $table->string('title_2');
            $table->mediumText('description_2')->nullable();
            $table->string('image_2');
            $table->tinyInteger('status_2')->default('0')->comment('1=Sembunyikan,0=Tampilkan');
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
        Schema::dropIfExists('img_bottom_slider');
    }
};

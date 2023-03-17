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
        Schema::create('banner_one', function (Blueprint $table) {
            $table->id();
            $table->string('image_banner_one_1')->nullable();
            $table->string('image_banner_one_2')->nullable();

            $table->tinyInteger('status_image_banner_one')->default('0')->comment('1=sembunyikan,0=tampilkan');   
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
        Schema::dropIfExists('banner_one');
    }
};


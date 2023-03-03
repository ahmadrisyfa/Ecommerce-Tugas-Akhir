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
        Schema::create('banner_two', function (Blueprint $table) {
            $table->id();
            $table->string('image_banner_two')->nullable();
            $table->tinyInteger('status_image_banner_two')->default('0')->comment('1=sembunyikan,0=tampilkan');   
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
        Schema::dropIfExists('bannert_two');
    }
};

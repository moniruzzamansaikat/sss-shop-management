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
        Schema::create('shop', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name') -> nullable();
            $table->string('shop_keeper') -> nullable();
            $table->string('shop_email') -> nullable();
            $table->string('shop_phone') -> nullable();
            $table->string('shop_address') -> nullable();
            $table->string('shop_website') -> nullable();
            $table->string('shop_logo') -> nullable();
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
        Schema::dropIfExists('shop');
    }
};

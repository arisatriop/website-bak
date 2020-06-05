<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->longText('info1')->nullable();
            $table->longText('info2')->nullable();
            $table->longText('info3')->nullable();
            $table->longText('info4')->nullable();
            $table->longText('info5')->nullable();
            $table->longText('info6')->nullable();
            $table->longText('info7')->nullable();
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
        Schema::dropIfExists('about');
    }
}

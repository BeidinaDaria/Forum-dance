<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('sportsmen', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('class of masterpiece')->nullable();
            $table->string('sports category')->nullable();
            $table->date('exp date of category')->nullable();
            $table->date('exp date of med')->nullable();
            $table->foreignId('groupid')->references('id')->on('groups')->cascadeOnDelete();
            $table->integer('roleid');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('sportsmen');
    }
}

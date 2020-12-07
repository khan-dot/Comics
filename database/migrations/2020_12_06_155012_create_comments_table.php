<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->integer('user_id')->unsigned(); 
            $table->string('comic_id');
            $table->timestamps();
        });


        // Schema::table('comments', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users'); 
        //     $table->foreign('comic_id')->references('id')->on('comics');
        // });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

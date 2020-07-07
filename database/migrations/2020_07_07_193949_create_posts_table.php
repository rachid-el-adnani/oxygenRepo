<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('zi');
            $table->string('siteId')->unique();
            $table->string('gsmId')->unique();
            $table->string('topoCont');
            $table->string('semPlann');
            $table->string('plannRedr');
            $table->string('dateReal');
            $table->string('semReal');
            $table->string('statuts');
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
        Schema::dropIfExists('posts');
    }
}

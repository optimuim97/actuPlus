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
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('publisher_name')->nullable();
            $table->bigInteger('publisher_id')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->boolean('is_visible_by_user')->nullable();
            $table->boolean('is_visible_by_agent')->nullable();
            $table->date('expiration_date')->nullable();
            $table->text('medias')->nullable();
            $table->text('cover')->nullable();
            $table->boolean('is_draft')->nullable();
            $table->bigInteger('entity_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}

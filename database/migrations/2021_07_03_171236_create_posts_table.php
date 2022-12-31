
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
            $table->bigInteger('user_id')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('publisher_name')->nullable();
            $table->bigInteger('publisher_id')->nullable();
            $table->boolean('is_publish')->default(1);
            $table->boolean('is_visible_by_user')->default(1);
            $table->boolean('is_visible_by_agent')->default(1);
            $table->date('expiration_date')->nullable();
            $table->text('medias')->nullable();
            $table->text('cover')->default('https://i.imgur.com/f0W33fk.png');
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

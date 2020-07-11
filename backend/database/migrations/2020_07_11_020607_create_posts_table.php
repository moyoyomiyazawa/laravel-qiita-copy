<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // postsテーブルを以下の条件でつくるよ！という宣言
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->string('tag1');
            // nullが入ってもいいカラムはnullableをつける
            $table->string('tag2')->nullable();
            $table->string('tag3')->nullable();
            $table->text('body');
            // 自動でcreated_atとupdated_atの2つのカラムを用意してくれるやつ
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

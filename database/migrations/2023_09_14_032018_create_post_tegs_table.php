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
        Schema::create('post_tegs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('teg_id');

            $table->index('post_id', 'post_teg_post_idx');
            $table->index('teg_id', 'post_teg_teg_idx');

            $table->foreign('post_id', 'post_teg_post_fk')->on('posts')->references('id');
            $table->foreign('teg_id', 'post_teg_teg_fk')->on('tegs')->references('id');

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
        Schema::dropIfExists('post_tegs');
    }
};

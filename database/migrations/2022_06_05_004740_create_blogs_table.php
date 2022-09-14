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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blogTitle');
            $table->string('blogSlug');
            $table->text('blogSummary');
            $table->longText('mainStory');
            $table->string('mainPhoto');

            $table->foreignId('user_id')->comment('editor id')
                ->constrained('users')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('category_id')->comment('category id')
                ->constrained('categories')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('views')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('blogs');
    }
};

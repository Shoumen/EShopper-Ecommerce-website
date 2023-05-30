<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogposts', function (Blueprint $table) {
            $table->bigincrements('blog_id');
            $table->string('blog_title',150);
            $table->text('blog_detail')->nullable();
            $table->string('blog_cover',150)->nullable();
            $table->string('blog_photo',50)->nullable();
            $table->string('blog_url',190)->nullable();
            $table->string('blog_creator',190)->nullable();
            $table->string('blog_slug',50)->nullable();
            $table->integer('blog_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogposts');
    }
};

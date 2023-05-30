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
        Schema::create('contactuses', function (Blueprint $table) {
            $table->bigIncrements('conus_id');
            $table->string('conus_name',50)->nullable();
            $table->string('conus_phone',20)->nullable();
            $table->string('conus_email',40)->nullable();
            $table->text('conus_sub')->nullable();
            $table->text('conus_mess')->nullable();
            $table->string('conus_slug',50);
            $table->integer('conus_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactuses');
    }
};

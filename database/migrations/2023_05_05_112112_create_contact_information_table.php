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
        Schema::create('contact_information', function (Blueprint $table) {
            $table->bigIncrements('cont_id');
            $table->string('cont_phone1',20)->nullable();
            $table->string('cont_phone2',20)->nullable();
            $table->string('cont_phone3',20)->nullable();
            $table->string('cont_phone4',20)->nullable();
            $table->string('cont_email1',40)->nullable();
            $table->string('cont_email2',40)->nullable();
            $table->string('cont_email3',40)->nullable();
            $table->string('cont_email4',40)->nullable();
            $table->text('cont_add1')->nullable();
            $table->text('cont_add2')->nullable();
            $table->text('cont_add3')->nullable();
            $table->text('cont_add4')->nullable();
            $table->integer('cont_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_information');
    }
};

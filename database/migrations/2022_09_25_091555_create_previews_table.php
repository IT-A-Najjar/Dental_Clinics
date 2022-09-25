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
        Schema::create('previews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('illness_id')->constrained('illnesses')->cascadeOnDelete();
            $table->foreignId('sick_id')->constrained('sicks')->cascadeOnDelete();
            $table->string('description');
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
        Schema::dropIfExists('previews');
    }
};

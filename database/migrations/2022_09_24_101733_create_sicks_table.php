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
        Schema::create('sicks', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->integer('age');
            $table->string('phone_number')->default(null);
            $table->string('description')->default(null);
            $table->foreignId('illness_id')->default(1)->constrained('illnesses')->cascadeOnDelete();
            $table->foreignId('user_id')->default(1)->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('sicks');
    }
};

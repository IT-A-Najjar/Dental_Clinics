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
            $table->string('full_name')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone_number')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->foreignId('illness_id')->nullable()->constrained('illnesses')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->default(1)->constrained('users')->cascadeOnDelete();
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

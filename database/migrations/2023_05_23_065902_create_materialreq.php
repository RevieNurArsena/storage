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
        Schema::create('materialreqs', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('request', 30);
            $table->string('destination', 30);
            $table->string('product', 60);
            $table->integer('qty');
            $table->date('schedule');
            $table->date('expired');
            $table->string('description', 128);
            $table->boolean('status', false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materialreqs');
    }
};

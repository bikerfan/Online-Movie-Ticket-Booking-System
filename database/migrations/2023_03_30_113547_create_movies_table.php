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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('category_controllers');
            // $table->integer('user_id');
            $table->string('name',100);
            $table->double('price');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('status',10);
            $table->string('director',100);
            $table->string('schedule',20);
            $table->string('duration',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};

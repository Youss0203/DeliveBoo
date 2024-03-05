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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->text('ingredients');
            $table->decimal('price', 10,2);
            $table->boolean('visibility');
            $table->string('description');
            $table->string('img_url', 300,);
            $table->unsignedBigInteger('id_restaurant');
            $table->foreign('id_restaurant')->references('id')->on('restaurants');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};

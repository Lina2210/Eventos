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
        Schema::create('streamer_evento', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("streamer_id");
            $table->foreign("streamer_id")->references("id")->on("streamers");


            $table->unsignedBigInteger("evento_id");
            $table->foreign("evento_id")->references("id")->on("eventos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('streamer_evento');
    }
};

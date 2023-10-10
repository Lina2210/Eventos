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
        Schema::create('user_profile_usuario', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("user_profile_id");
            $table->foreign("user_profile_id")->references("id")->on("user_profiles");

            $table->unsignedBigInteger("usuario_id");
            $table->foreign("usuario_id")->references("id")->on("usuarios");

            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile_user_usuario');
    }
};

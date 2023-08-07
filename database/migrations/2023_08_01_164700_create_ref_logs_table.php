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
        Schema::create('ref_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('userID');
            $table->string('refSignUp_Code', 255)->nullable();
            $table->integer('refSignUp_user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_logs');
    }
};

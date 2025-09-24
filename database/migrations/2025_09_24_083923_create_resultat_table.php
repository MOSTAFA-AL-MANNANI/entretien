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
        Schema::create('resultat', function (Blueprint $table) {
            $table->id();
            $table->integer('scoreP');
            $table->integer('scoreT');
            $table->integer('scoreS');
            $table->integer('total');
            $table->unsignedBigInteger("id_stu");
            $table->foreign("id_stu")->references("id_stu")->on("students")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultat');
    }
};

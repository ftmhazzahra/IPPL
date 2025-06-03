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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // Judul beasiswa
            $table->string('country');     // Negara tujuan
            $table->string('degree');      // Jenjang (S1, S2, S3, dll.)
            $table->text('description');   // Deskripsi beasiswa
            $table->timestamps();          // created_at & updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};

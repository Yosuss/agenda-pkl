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
        //
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('id_agenda'); // Primary key
            $table->string('tanggal');
            $table->string('kegiatan')->nullable();
            $table->timestamps(); // created_at dan updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('agenda');
    }
};
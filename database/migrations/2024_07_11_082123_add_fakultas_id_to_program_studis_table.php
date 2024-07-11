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
            Schema::table('program_studis', function (Blueprint $table) {
                $table->unsignedBigInteger('fakultas_id')->nullable(); // Menambahkan kolom fakultas_id
                $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_studis', function (Blueprint $table) {
            $table->dropForeign(['fakultas_id']); // Menghapus foreign key
            $table->dropColumn('fakultas_id'); // Menghapus kolom fakultas_id
        });
    }
};

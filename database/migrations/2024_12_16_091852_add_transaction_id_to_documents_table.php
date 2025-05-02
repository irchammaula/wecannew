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
<<<<<<< HEAD
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'quota')) {
                $table->integer('quota')->default(0)->after('email'); // bisa disesuaikan mau setelah kolom apa
            }
=======
        Schema::table('documents', function (Blueprint $table) {
            $table->string('transaction_id')->nullable();
            $table->string('file_path'); // Path file dokumen
            $table->enum('status', ['pending', 'checked'])->default('pending');
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'quota')) {
                $table->dropColumn('quota');
            }
=======
        Schema::table('documents', function (Blueprint $table) {
            //
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        });
    }
};

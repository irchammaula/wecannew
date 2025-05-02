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
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD
            if (!Schema::hasColumn('users', 'quota')) {
                $table->integer('quota')->default(0)->after('email'); // atau setelah kolom lain, bebas
            }
=======
            // $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password');
            // $table->foreignId('role_id')->constrained('roles')->onDelete('cascade'); // Relasi ke roles
            // $table->decimal('balance', 10, 2)->default(0); // Saldo pengguna
            $table->integer('quota')->default(0)->change(); // Kuota cek plagiarisme
            // $table->timestamps();
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD
            if (Schema::hasColumn('users', 'quota')) {
                $table->dropColumn('quota');
            }
=======
            //
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        });
    }
};

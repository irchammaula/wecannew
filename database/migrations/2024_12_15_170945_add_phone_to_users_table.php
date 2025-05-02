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
            $table->string('phone', 15)->nullable(); // Adjust the length if necessary
=======
            $table->string('phone', 15)->change(); // Adjust the length if necessary
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
        });
    }
};

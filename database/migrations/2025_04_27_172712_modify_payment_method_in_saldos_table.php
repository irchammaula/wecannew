<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPaymentMethodInSaldosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('saldos', function (Blueprint $table) {
            // Menambahkan nilai default pada kolom 'payment_method' dan menjadikannya nullable
            $table->string('payment_method')->default('default_method')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('saldos', function (Blueprint $table) {
            // Mengembalikan perubahan, menghapus default dan membuat kolom 'payment_method' tidak nullable
            $table->string('payment_method')->nullable(false)->default(null)->change();
        });
    }
}

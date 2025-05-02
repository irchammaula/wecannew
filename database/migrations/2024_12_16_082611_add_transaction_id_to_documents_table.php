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
        Schema::table('documents', function (Blueprint $table) {
<<<<<<< HEAD
            // Hapus atau komentari baris yang menambahkan kolom 'id' jika sudah ada
            // $table->bigIncrements('id');
            $table->bigInteger('transaction_id')->unsigned();
        });



        // Foreign keys

        // $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
=======

            $table->unsignedBigInteger('transaction_id'); // Kolom untuk transaksi terkait


            // Foreign keys

            // $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
        });
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            //
        });
    }
};

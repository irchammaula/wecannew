<?php

<<<<<<< HEAD
use Illuminate\Container\Attributes\DB;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Storage;
=======
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
<<<<<<< HEAD

Artisan::command('delete:old-documents', function () {
    // Ambil dokumen yang lebih dari 24 jam
    $documents = FacadesDB::table('documents')
        ->where('created_at', '<', now()->subDay())
        ->get();

    $deletedCount = 0;

    foreach ($documents as $document) {
        // Hapus file dari storage jika ada
        if ($document->file_path && Storage::exists($document->file_path)) {
            Storage::delete($document->file_path);
        }

        // Hapus data dari database
        FacadesDB::table('documents')->where('id', $document->id)->delete();
        $deletedCount++;
    }

    // Tampilkan jumlah dokumen yang dihapus
    $this->info("Deleted {$deletedCount} documents older than 24 hours.");
})->purpose('Delete documents older than 24 hours');

Artisan::command('delete:old-documents', function () {
    // Ambil dokumen yang lebih dari 24 jam
    $documents = FacadesDB::table('documents')
        ->where('created_at', '<', now()->subDay())
        ->get();

    $deletedCount = 0;

    foreach ($documents as $document) {
        // Hapus file dari storage jika ada
        if ($document->file_path && Storage::exists($document->file_path)) {
            Storage::delete($document->file_path);
        }

        // Hapus data dari database
        FacadesDB::table('documents')->where('id', $document->id)->delete();
        $deletedCount++;
    }

    // Tampilkan jumlah dokumen yang dihapus
    $this->info("Deleted {$deletedCount} documents older than 24 hours.");
})->purpose('Delete documents older than 24 hours');
=======
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

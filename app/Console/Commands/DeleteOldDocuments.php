<?php

<<<<<<< HEAD
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
=======
// Command: DeleteOldDocuments.php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Document;
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
use Illuminate\Support\Facades\Storage;

class DeleteOldDocuments extends Command
{
<<<<<<< HEAD
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:old-documents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete documents older than 24 hours';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ambil dokumen yang lebih dari 24 jam
        $documents = DB::table('documents')
            ->where('created_at', '<', now()->subDay())
            ->get();

        $deletedCount = 0;

        foreach ($documents as $document) {
            // Hapus file dari storage jika ada
            if ($document->file_path && Storage::exists($document->file_path)) {
                Storage::delete($document->file_path);
            }

            // Hapus data dari database
            DB::table('documents')->where('id', $document->id)->delete();
            $deletedCount++;
        }

        // Tampilkan jumlah dokumen yang dihapus
        $this->info("Deleted {$deletedCount} documents older than 24 hours.");
=======
    protected $signature = 'documents:delete-old';
    protected $description = 'Hapus dokumen yang sudah lebih dari 24 jam';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $documents = Document::where('uploaded_at', '<', now()->subDay())->get();

        foreach ($documents as $document) {
            // Hapus file dari storage
            if (Storage::exists($document->file_path)) {
                Storage::delete($document->file_path);
            }

            // Hapus data dokumen dari database
            $document->delete();
        }

        $this->info('Dokumen yang sudah lebih dari 24 jam telah dihapus.');
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    }
}

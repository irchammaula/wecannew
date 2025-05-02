<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Document;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DeleteExpiredDocuments extends Command
{
    protected $signature = 'documents:cleanup';

    protected $description = 'Hapus dokumen yang berusia lebih dari 24 jam';

    public function handle()
    {
        $expiredDocuments = Document::where('uploaded_at', '<=', now()->subHours(24))->get();

        $deletedCount = 0;

        foreach ($expiredDocuments as $document) {
            // Hapus file dari storage
            if ($document->file_path && Storage::disk('public')->exists($document->file_path)) {
                Storage::disk('public')->delete($document->file_path);
            }

            // Hapus record dari database
            $document->delete();
            $deletedCount++;
        }

        $this->info("Deleted {$deletedCount} expired documents.");
        Log::info("Expired documents deleted: {$deletedCount}");
    }
}

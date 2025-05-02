<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Http;

class FeedbackController extends Controller
{
    public function download($id)
    {
        $document = Document::findOrFail($id);

        // Ambil objectId & author_id dari data yang tersedia
        $objectId = $document->object_id;
        $authorId = 1175408694; // sesuaikan nama kolom

        if (!$objectId || !$authorId) {
            return redirect()->back()->with('error', 'Object ID atau Author ID tidak ditemukan.');
        }

        $feedbackUrl = "https://ev.turnitin.com/app/carta/en_us/?o={$objectId}&u={$authorId}&lang=en_int&ro=103&student_user=1";

        // Langsung redirect ke URL Turnitin
        return redirect()->away($feedbackUrl);
    }
}

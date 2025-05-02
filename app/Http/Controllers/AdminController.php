<?php

namespace App\Http\Controllers;

use App\Mail\DocumentCheckedMail;
use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;  // Untuk logging error
=======
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $TurnitinCount = Document::count();
<<<<<<< HEAD
        return view('admin.dashboard', ['hitung_user' => $userCount, 'hitung_doc' => $TurnitinCount]);
=======
        return view('admin.dashboard', ['hitung_user' => $userCount, 'hitung_doc' => $TurnitinCount]); // Buat view di resources/views/admin/dashboard.blade.php
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    }

    public function dokumenindex()
    {
        $documentsChecked = Document::where('status', 'checked')
            ->orderBy('created_at', 'desc')  // Urutkan berdasarkan 'created_at' dari terbaru
            ->get();

        return view('admin.turnitin', compact('documentsChecked'));
    }
<<<<<<< HEAD

=======
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    public function dokumenindex2()
    {
        $documentsPending = Document::where('status', 'pending')
            ->orderBy('created_at', 'desc')  // Urutkan berdasarkan 'created_at' dari terbaru
            ->get();

        return view('admin.turnitinuncheck', compact('documentsPending'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:checked', // Hanya bisa di-set ke checked
        ]);

<<<<<<< HEAD
        $document = Document::find($id);

        // Cek apakah dokumen ditemukan
        if (!$document) {
            return redirect()->route('admin.turnitin')->with('error', 'Dokumen tidak ditemukan.');
        }

=======
        $document = Document::findOrFail($id);
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        $document->status = 'checked'; // Update status menjadi checked
        $document->save();

        return redirect()->route('admin.turnitin')->with('success', 'Dokumen berhasil diperiksa.');
    }

    // Mendownload dokumen yang sudah di-upload
    public function download($id)
    {
<<<<<<< HEAD
        $document = Document::findOrFail($id); // Menggunakan findOrFail untuk langsung melemparkan exception jika dokumen tidak ditemukan

        if (!Storage::disk('public')->exists("uploads/checked_documents/{$document->file_path}")) {
            return redirect()->route('admin.turnitin')->with('error', 'File dokumen tidak ditemukan.');
        }

        $fileUrl = Storage::disk('public')->url("uploads/checked_documents/{$document->file_path}");
        return response()->download($fileUrl);
    }

    public function uploadChecked(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx',
        ]);

        $document = Document::findOrFail($id); // Menggunakan findOrFail untuk memastikan dokumen ada

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads/checked_documents', 'public');
            $document->file_path = $filePath;
            $document->status = 'checked';
            $document->save();

            $customer = $document->user;

            if (!$customer) {
                return redirect()->route('admin.turnitin')->with('error', 'Pengguna terkait tidak ditemukan.');
            }

            try {
                Mail::to($customer->email)->send(new DocumentCheckedMail($filePath, $customer->name));
            } catch (\Exception $e) {
                Log::error('Error sending email: ' . $e->getMessage());
                return redirect()->route('admin.turnitin')->with('error', 'Terjadi kesalahan saat mengirim email.');
            }

            return redirect()->route('admin.turnitin')->with('success', 'Dokumen hasil pemeriksaan berhasil di-upload.');
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }


=======
        $document = Document::findOrFail($id);
        return response()->download(storage_path("app/public/{$document->file_path}"));
    }

    // Meng-upload dokumen yang sudah diperiksa oleh admin
    public function uploadChecked(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx', // Format dokumen yang diperiksa
        ]);

        $document = Document::findOrFail($id);

        // Upload file hasil pemeriksaan
        $filePath = $request->file('file')->store('uploads/checked_documents');
        $document->file_path = $filePath;
        $document->status = 'checked'; // Ubah status menjadi checked
        $document->save();

        $customer = $document->user;

        // dd($customer);

        // Kirim email dengan file sebagai lampiran
        Mail::to($customer->email)->send(
            new DocumentCheckedMail($filePath, $customer->name)
        );

        return redirect()->route('admin.turnitin')->with('success', 'Dokumen hasil pemeriksaan berhasil di-upload.');
    }
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    public function datauser()
    {
        return view('admin.datauser');
    }
}

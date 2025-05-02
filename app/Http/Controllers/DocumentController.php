<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PriceList;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
=======
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    // Tampilkan daftar dokumen
    public function index()
    {
<<<<<<< HEAD
        // Ambil daftar harga
        $pl = PriceList::all();

        // Ambil saldo user yang sedang login
        $saldo = User::where('id', Auth::id())->first();

        // Ambil dokumen dengan pagination, 8 dokumen per halaman
        $documents = Document::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(8);  // <- Disesuaikan ke 8

        // Kirim data ke view
        return view('customer.cekturnitin', [
            'dokument' => $documents,
            'saldohuy' => $saldo,
            'pricelist' => $pl
        ]);
    }
    // Upload dokumen

    public function store(Request $request)
    {
        // Validasi input
=======
        // $pricelist = config('pricelist');
        $pl = PriceList::all();
        $saldo = User::where('id', Auth::id())->first();
        $documents = Document::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')  // Urutkan berdasarkan 'created_at' dari terbaru
            ->get();
        return view('customer.cekturnitin', ['dokument' => $documents, 'saldohuy' => $saldo, 'pricelist' => $pl]);
    }

    // Upload dokumen
    public function store(Request $request)
    {
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        $request->validate([
            'name' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx',
            'description' => 'nullable|string',
        ]);

<<<<<<< HEAD
        // Ambil user yang login
        $user = auth()->user();

        // Cek kuota
        if ($user->quota <= 0) {
            return back()->with('error', 'Kuota tidak cukup');
        }

        // Mulai transaksi
        DB::beginTransaction();

        try {
            // Kurangi kuota pengguna
            $user->decrement('quota', 1);

            // Simpan file ke storage public
            $uploadedFile = $request->file('file');
            $filePath = $uploadedFile->store('uploads/documents', 'public');

            // 1. Pilih assignment ID yang belum mencapai 25 dokumen
            $assignmentRange = range(166382727, 166382776);
            $availableAssignments = [];

            foreach ($assignmentRange as $id) {
                $count = Document::where('assignment_id', $id)->count();
                if ($count < 25) {
                    $availableAssignments[] = $id;
                }
            }

            if (empty($availableAssignments)) {
                // Rollback kuota jika tidak ada assignment tersedia
                $user->increment('quota', 1);
                return back()->with('error', 'Semua assignment ID telah mencapai batas maksimum.');
            }

            $selectedAssignmentId = collect($availableAssignments)->random();

            // 2. Upload ke /upload
            $turnitinResponse = Http::attach(
                'fileupload',
                file_get_contents(storage_path("app/public/{$filePath}")),
                $uploadedFile->getClientOriginalName()
            )->post('https://api.wecando.web.id/upload', [
                'assignmentId' => $selectedAssignmentId,
                'authorId' => '1175408694',
                'submissionTitle' => $request->name,
                'object_id' => '',
                'multi_file_token' => '',
            ]);

            $responseData = $turnitinResponse->json();
            $idFile = $responseData['data']['id'] ?? null;

            if (!$idFile) {
                // Rollback kuota jika gagal mendapatkan ID file
                $user->increment('quota', 1);
                return back()->with('error', 'Gagal mendapatkan ID file dari server.');
            }

            // 3. Simpan dokumen awal
            $document = Document::create([
                'transaction_id' => uniqid(),
                'name' => $request->name,
                'file_path' => $filePath,
                'description' => $request->description,
                'user_id' => $user->id,
                'status' => 'pending',
                'uploaded_at' => now(),
                'idFile' => $idFile,
                'assignment_id' => $selectedAssignmentId,
            ]);

            // 4. Submit ke /submit
            $submitResponse = Http::get("https://api.wecando.web.id/submit", [
                'idFile' => $idFile,
                'assignmentId' => $selectedAssignmentId,
                'authorId' => '1175408694',
            ]);

            if (!$submitResponse->successful()) {
                // Rollback kuota jika submit gagal
                $user->increment('quota', 1);
                return back()->with('error', 'Submit ke Turnitin gagal.');
            }

            $data = $submitResponse->json();
            $message = $data['message'] ?? '';
            $objectid = $data['data'][0]['objectid'] ?? null;

            // Update object_id jika tersedia
            if ($objectid) {
                $document->update([
                    'object_id' => $objectid
                ]);
            }

            // Ambil kembali dokumen
            $savedDocument = Document::where('transaction_id', $document->transaction_id)->first();

            // 5. Dapatkan URL feedback
            $feedbackResponse = Http::get('https://api.wecando.web.id/feedback', [
                'objectId' => $savedDocument->object_id,
                'author_id' => '1175408694',
            ]);

            if ($feedbackResponse->successful()) {
                $feedbackData = $feedbackResponse->json();
                $feedbackUrl = $feedbackData['feedbackUrl'] ?? null;

                if (!$feedbackUrl) {
                    // Rollback kuota jika gagal mendapatkan URL feedback
                    $user->increment('quota', 1);
                    return back()->with('error', 'Gagal mendapatkan URL feedback.');
                }

                // Commit transaksi jika semuanya berhasil
                DB::commit();

                return view('open_new_tab', [
                    'message' => "Submit berhasil: {$message}",
                    'url' => $feedbackUrl,
                ]);
            } else {
                // Rollback kuota jika gagal mengakses API feedback
                $user->increment('quota', 1);
                return back()->with('error', 'Gagal mengakses API feedback.');
            }
        } catch (\Exception $e) {
            // Rollback kuota jika terjadi exception
            $user->increment('quota', 1);

            Log::error('Gagal submit ke API Turnitin: ' . $e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan saat komunikasi dengan server.');
        }
=======
        $user = auth()->user();

        if ($user->quota <= 0) {
            session()->flash('error', 'Kuota tidak Cukup');
            return back();
        }

        $filePath = $request->file('file')->store('uploads/documents');

        $document = Document::create([
            'transaction_id' => uniqid(), // Auto-generate ID transaksi
            'name' => $request->name,
            'file_path' => $filePath,
            'description' => $request->description,
            'user_id' => auth()->id(),
            'status' => 'pending',
            'uploaded_at' => now(),
        ]);

        $user->decrement('quota', 1);
        return redirect()->route('customer.cekturnitin')->with('success', 'Dokumen berhasil diupload.');
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    }



<<<<<<< HEAD
    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'name' => 'required|string',
    //         'file' => 'required|file|mimes:pdf,doc,docx',
    //         'description' => 'nullable|string',
    //     ]);

    //     // Ambil user yang login
    //     $user = auth()->user();

    //     // Cek kuota
    //     if ($user->quota <= 0) {
    //         return back()->with('error', 'Kuota tidak cukup');
    //     }

    //     // Simpan file ke storage public
    //     $uploadedFile = $request->file('file');
    //     $filePath = $uploadedFile->store('uploads/documents', 'public');

    //     // Kurangi kuota pengguna
    //     $user->decrement('quota', 1);

    //     try {
    //         // Upload ke /upload
    //         $turnitinResponse = Http::attach(
    //             'fileupload',
    //             file_get_contents(storage_path("app/public/{$filePath}")),
    //             $uploadedFile->getClientOriginalName()
    //         )->post('https://api.wecando.web.id/upload', [
    //             'assignmentId' => '166382727',
    //             'authorId' => '1175408694',
    //             'submissionTitle' => $request->name,
    //             'object_id' => '',
    //             'multi_file_token' => '',
    //         ]);

    //         $responseData = $turnitinResponse->json();
    //         $idFile = $responseData['data']['id'] ?? null;

    //         if (!$idFile) {
    //             return back()->with('error', 'Gagal mendapatkan ID file dari server.');
    //         }

    //         // Simpan dokumen awal
    //         $document = Document::create([
    //             'transaction_id' => uniqid(),
    //             'name' => $request->name,
    //             'file_path' => $filePath,
    //             'description' => $request->description,
    //             'user_id' => $user->id,
    //             'status' => 'pending',
    //             'uploaded_at' => now(),
    //             'idFile' => $idFile,
    //         ]);

    //         // Kirim ke /submit
    //         $submitResponse = Http::get("https://api.wecando.web.id/submit", [
    //             'idFile' => $idFile,
    //             'assignmentId' => '166382727',
    //             'authorId' => '1175408694',
    //         ]);

    //         if ($submitResponse->successful()) {
    //             $data = $submitResponse->json();
    //             $message = $data['message'] ?? '';
    //             $objectid = $data['data'][0]['objectid'] ?? null;

    //             // Cek apakah objectid ditemukan
    //             // Simpan objectid ke database jika ditemukan
    //             if ($objectid) {
    //                 $document->update([
    //                     'object_id' => $objectid
    //                 ]);
    //             }

    //             // Ambil document yang baru saja disimpan untuk mengambil object_id
    //             $savedDocument = Document::where('transaction_id', $document->transaction_id)->first();

    //             // Akses API feedback untuk mendapatkan feedback URL
    //             $feedbackResponse = Http::get('https://api.wecando.web.id/feedback', [
    //                 'objectId' => $savedDocument->object_id,
    //                 'author_id' => '1175408694',
    //             ]);

    //             if ($feedbackResponse->successful()) {
    //                 $feedbackData = $feedbackResponse->json();
    //                 $feedbackUrl = $feedbackData['feedbackUrl'] ?? null;

    //                 if (!$feedbackUrl) {
    //                     return back()->with('error', 'Gagal mendapatkan URL feedback.');
    //                 }

    //                 // Kirim ke view "open_new_tab" dengan data feedbackUrl
    //                 return view('open_new_tab', [
    //                     'message' => "Submit berhasil: {$message}",
    //                     'url' => $feedbackUrl,  // Kirim feedback URL ke view
    //                 ]);
    //             } else {
    //                 return back()->with('error', 'Gagal mengakses API feedback.');
    //             }
    //         } else {
    //             return back()->with('error', 'Submit ke Turnitin gagal.');
    //         }
    //     } catch (\Exception $e) {
    //         Log::error('Gagal submit ke API Turnitin: ' . $e->getMessage());
    //         return back()->with('error', 'Terjadi kesalahan saat komunikasi dengan server.');
    //     }
    // }






    // public function download(Document $dokument)
    // {
    //     if ($dokument->user_id !== Auth::id()) {
    //         return back()->with('error', 'Anda tidak memiliki akses ke dokumen ini.');
    //     }

    //     // Validasi bahwa dokumen sudah diperiksa admin
    //     if ($dokument->status !== 'checked') {
    //         return back()->with('error', 'Dokumen belum diperiksa oleh admin.');
    //     }


    //     return Storage::download($dokument->file_path);
    // }
=======
    public function download(Document $dokument)
    {
        if ($dokument->user_id !== Auth::id()) {
            return back()->with('error', 'Anda tidak memiliki akses ke dokumen ini.');
        }

        // Validasi bahwa dokumen sudah diperiksa admin
        if ($dokument->status !== 'checked') {
            return back()->with('error', 'Dokumen belum diperiksa oleh admin.');
        }


        return Storage::download($dokument->file_path);
    }
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

    public function belikuota(Request $request)
    {
        $request->validate([
            'jumlah_cek' => 'required|integer|min:1',
        ]);

        $user = auth()->user();

<<<<<<< HEAD
        // Cek jika user baru dan memberikan kuota cek 1x secara otomatis
        $isNewUser = $user->created_at >= now()->subDays(1); // Misalnya user baru jika daftar dalam 1 hari terakhir

        // Jika user baru dan belum menggunakan kuota cek 1x
        if ($isNewUser && $user->quota == 0) {
            // Berikan 1 kuota cek gratis untuk user baru
            $user->increment('quota', 1);
            session()->flash('success', 'Selamat, Anda mendapat kuota cek 1x secara gratis karena baru mendaftar!');
            return back();
        }

        // Query untuk mendapatkan harga berdasarkan jumlah cek
        $pricelist = PriceList::where('check_count', $request->jumlah_cek)->first();
=======
        // Cari harga di tabel Pricelist
        $pricelist = Pricelist::where('jumlah_cek', $request->jumlah_cek)->first();
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

        if (!$pricelist) {
            session()->flash('error', 'Jumlah cek tidak valid');
            return back();
        }

<<<<<<< HEAD
        $harga = $pricelist->price;

        // Cek saldo user, jika tidak cukup saldo langsung beri pesan error
=======
        $harga = $pricelist->harga;

        // Cek apakah balance mencukupi
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        if ($user->balance < $harga) {
            session()->flash('error', 'Saldo tidak mencukupi');
            return back();
        }

<<<<<<< HEAD
        // Kurangi saldo dan tambah kuota cek sesuai dengan jumlah yang dibeli
=======
        // Kurangi balance dan tambahkan quota
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        $user->decrement('balance', $harga);
        $user->increment('quota', $request->jumlah_cek);

        session()->flash('success', 'Berhasil membeli kuota');
        return back();
    }
<<<<<<< HEAD

    public function destroy($id)
    {
        $document = Document::where('id', $id)
            ->where('user_id', Auth::id()) // optional: keamanan
            ->firstOrFail();

        // Hapus file fisik jika perlu:
        if ($document->file_path && file_exists(public_path($document->file_path))) {
            unlink(public_path($document->file_path));
        }

        $document->delete();

        return redirect()->back()->with('success', 'Dokumen berhasil dihapus.');
    }
=======
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
}

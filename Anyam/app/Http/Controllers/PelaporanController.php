<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class PelaporanController extends Controller
{
    public function getFirebaseConfig()
{
    $filePath = public_path('firebase-credentials.js');
    
    if (File::exists($filePath)) {
        $config = File::get($filePath);
        return response()->json(['config' => $config]); // Pastikan ada indeks 'config'
    }

    return response()->json(['error' => 'Firebase config not found'], 404);
}

public function getdatapelaporan()
    {
        $response = Http::get('https://anyam-a0fcb-default-rtdb.firebaseio.com/Anyam/pelaporan.json');
        
        // Pemeriksaan struktur respons JSON
        dd($response->json());
        
        // Kode selanjutnya
        $config = $response->json()['Anyam'];
        // Lakukan sesuatu dengan konfigurasi Firebase
        dd($config);
        
    }

    public function postdatapelaporan(Request $request)
{
    // Ambil data yang diterima dari formulir atau sumber lain
    $postData = $request->all();

    // Kirim data ke Firebase API
    $response = Http::post('https://anyam-a0fcb-default-rtdb.firebaseio.com/Anyam/pelaporan.json', [
        'data' => $postData,
    ]);

    // Cek apakah permintaan berhasil atau tidak
    if ($response->successful()) {
        return response()->json(['success' => true, 'message' => 'Data successfully posted to Firebase']);
    } else {
        return response()->json(['error' => 'Failed to post data to Firebase'], $response->status());
    }
}

public function deletedatapelaporan(Request $request)
{
    // Ambil ID data yang ingin dihapus dari formulir atau sumber lain
    $dataId = $request->input('id');

    // Buat URL endpoint untuk data yang akan dihapus
    $deleteUrl = "https://anyam-a0fcb-default-rtdb.firebaseio.com/Anyam/pelaporan/{$dataId}.json";

    // Kirim permintaan DELETE ke Firebase API
    $response = Http::delete($deleteUrl);

    // Cek apakah permintaan berhasil atau tidak
    if ($response->successful()) {
        return response()->json(['success' => true, 'message' => 'Data successfully deleted from Firebase']);
    } else {
        return response()->json(['error' => 'Failed to delete data from Firebase'], $response->status());
    }
}



}

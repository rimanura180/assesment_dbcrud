<?php

namespace App\Http\Controllers;
use App\Models\Matakuliah;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(){

        $matakuliahs = Matakuliah::all();

        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create(){

        return view('matakuliah.create');
    }

    public function store(Request $request){
      
         $request->validate([ 
            'kode' => 'required|string|max:255', 
            'mata_kuliah' => 'required|string|max:255', 
        ]); 

        Matakuliah::create([ 
            'kode' => $request->input('kode'), 
            'mata_kuliah' => $request->input('mata_kuliah'), 
        
        ]);

         // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
         return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil disimpan.');
    }

    public function edit($id){

        $matakuliah = Matakuliah::find($id);
        return view('matakuliah.edit', compact('matakuliahs'));
    }

    public function update(Request $request, $id){
        // Validasi data jika diperlukan 
        $request->validate([ 
            'kode' => 'required|string|max:255', 
            'mata_kuliah' => 'required|string|max:255', 
        ]); 

         // Temukan data mahasiswa yang akan diubah
        $matakuliah = Matakuliah::find($id);

        // Perbarui data mahasiswa
        $matakuliah->kode = $request->input('kode');
        $matakuliah->mata_kuliah = $request->input('mata_kuliah');
        $matakuliah->save();

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil diperbarui.');
    }

    public function destroy($id){
        // Temukan data mahasisw yang akan dihapus
        $matakuliah = Matakuliah::find($id);

        if ($matakuliah) {
           
            $matakuliah->delete();

            // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan
            return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil dihapus.');
        } else {
            return redirect()->route('matakuliah.index')->with('error', 'Data mata kuliah tidak ditemukan.');
        }
    }
}

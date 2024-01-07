<?php

namespace App\Http\Controllers;
use App\Models\Prodi;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index(){

        $prodis = Prodi::all();

        return view('prodi.index', compact('prodis'));
    }

    public function create(){

        return view('prodi.create');
    }

    public function store(Request $request){
      
         $request->validate([ 
            'nim' => 'required|string|max:255', 
            'jurusan' => 'required|string|max:255', 
        ]); 

        Prodi::create([ 
            'nim' => $request->input('nim'), 
            'jurusan' => $request->input('jurusan'), 
        
        ]);

         // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
         return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil disimpan.');
    }

    public function edit($id){

        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('prodis'));
    }

    public function update(Request $request, $id){
        // Validasi data jika diperlukan 
        $request->validate([ 
            'nim' => 'required|string|max:255', 
            'jurusan' => 'required|string|max:255', 
        ]); 

         // Temukan data mahasiswa yang akan diubah
        $prodi = Prodi::find($id);

        // Perbarui data mahasiswa
        $prodi->nim = $request->input('nim');
        $prodi->jurusan = $request->input('jurusan');
        $prodi->save();

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil diperbarui.');
    }

    public function destroy($id){
        // Temukan data mahasisw yang akan dihapus
        $prodi = Prodi::find($id);

        if ($prodi) {
           
            $prodi->delete();

            // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan
            return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil dihapus.');
        } else {
            return redirect()->route('prodi.index')->with('error', 'Data prodi tidak ditemukan.');
        }
    }
}


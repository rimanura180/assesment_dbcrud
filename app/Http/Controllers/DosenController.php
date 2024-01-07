<?php

namespace App\Http\Controllers;
use App\Models\Dosen;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){

        $dosens = [];

        $dosens = Dosen::all();

        return view('dosen.index', compact('dosens'));

    }

    public function create(){

        return view('dosen.create');
    }

    public function store(Request $request){
         
         $request->validate([ 
            'nama' => 'required|string|max:255', 
            'jabatan' => 'required|string|max:255', 
        ]); 

        Dosen::create([ 
            'nama' => $request->input('nama'), 
            'jabatan' => $request->input('jabatan'), 
        
        ]);
 
         return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil disimpan.');
    }

    public function edit($id){

        $dosen = Dosen::find($id);
        return view('dosen.edit', compact('dosens'));
    }

    public function update(Request $request, $id){
       
        $request->validate([ 
            'nama' => 'required|string|max:255', 
            'jabatan' => 'required|string|max:255', 
        ]); 

        $dosen = Dosen::find($id);

        $dosen->nama = $request->input('nama');
        $dosen->jabatan = $request->input('jabatan');
        $dosen->save();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function destroy($id){
        $dosen = Dosen::find($id);

        if ($dosen) {
            $dosen->delete();

            return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus.');
        } else {
            return redirect()->route('dosen.index')->with('error', 'Data dosen tidak ditemukan.');
        }
    }
}

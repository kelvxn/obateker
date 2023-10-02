<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class ObatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        // return "Tabel obat di sini";

        $obats = obat::all();
        return view('obat.index',['obats' => $obats]);
    }

    public function create(){
        return view('obat.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'id'            => 'required|unique:obats',
            'nama'          => 'required|max:100',
            'gambar'        => 'required',
            'harga'         => 'required|numeric',
        ]);

        obat::create($validateData);
  
        return redirect()->route('obats.index')->with('pesan',"Penambahan data {$validateData['nama']} berhasil");
    }

    // public function show($obat){
    //     // dd($obat);
    //     $result = obat::findOrFail($obat);
    //     return view('obat.show',['obat' => $result]);
    // }

    public function show(obat $obat){
        return view('obat.show',['obat' => $obat]);
    }

    public function edit(obat $obat){
        return view('obat.edit',['obat' => $obat]);
    }

    public function update(Request $request, obat $obat){
        // dump($request->all());
        // dump($obat);
        $validateData = $request->validate([
            'id'            => 'required|unique:obats,id,'.$obat->id,
            'nama'          => 'required|max:100',
            'gambar'        => 'required',
            'harga'         => 'required|numeric',
        ]);

        // obat::where('id',$obat->id)->update($validateData);
        $obat->update($validateData);
        return redirect()->route('obats.show',['obat'=>$obat->id])->with('pesan',"Update data {$validateData['nama']} berhasil");
    }

    public function destroy(obat $obat){
        $obat->delete();
        return redirect()->route('obats.index')->with('pesan',"Hapus data $obat->nama berhasil");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request){
        $request->validate([
            'berkas' => 'required|file|image|max:1000',
        ]);

        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = 'gambar-'.time().".".$extFile;
        $path = $request->berkas->move('images',$namaFile);
        echo "Variabel path berisi: $path <br>";

        $pathBaru = asset('images/'.$namaFile);
        echo "Proses upload berhasil, file berada di: <a href='$pathBaru'>$pathBaru";
    }
}

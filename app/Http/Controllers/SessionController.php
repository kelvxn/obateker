<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }
    public function buatSession(){
        session(['hakAkses' => 'admin','nama' => 'Anto']);
        // return "Session sudah dibuat";
        return view("home");
    }
    // public function buatSession(Request $request){
    //     $request->session()->put('hakAkses','admin');
    // }
    // public function buatSession(){
    //     Session::put('hakAkses','admin');
    // }
    public function aksesSession(Request $request){
        // Menggunakan helper function
        echo '<b>Akses Session </b> <br><br>';
        echo "Hak Akses : ";
        echo session('hakAkses');
        echo "<br>";
        echo "Nama : ";
        echo session('nama');
        echo '<hr>';
    }
    // public function aksesSession(Request $request){
    //     dump( session()->all() );
    // }
    // public function aksesSession(Request $request){
    //     $isiSession = $request->session()->get('kota','Jakarta');
    //     echo "Isi session adalah $isiSession";
    // }
    // public function aksesSession(Request $request){
    //     if(session()->has('hakAkses')){
    //         echo "Session 'hakAkses' terdeteksi: ". session('hakAkses');
    //     }
    // }
    // public function hapusSession(Request $request){
    //     // Menghapus 1 session menggunakan helper function
    //     session()->forget('hakAkses');
    //     // Menghapus 1 session menggunakan Request object
    //     $request->session()->forget('hakAkses');
    //     // Menghapus 1 session menggunakan facade session
    //     Session::forget('hakAkses');
    //     echo "Session hakAkses sudah dihapus";
    // }
    public function hapusSession(Request $request){
        // Menghapus semua session menggunakan helper function
        session()->flush();
        // Menghapus semua session menggunakan Request object
        $request->session()->flush();
        // Menghapus semua session menggunakan facade session
        Session::flush();
        echo "Semua session sudah dihapus";
    }
    public function flashSession(Request $request){
        // Membuat 1 flash session menggunakan helper function
        session()->flash('hakAkses','admin');
        // Membuat 1 flash session menggunakan Request object
        $request->session()->forget('hakAkses'.'admin');
        // Membuat 1 flash session menggunakan facade session
        Session::forget('hakAkses','admin');
        echo "Flash session hakAkses sudah dibuat";
    }
}

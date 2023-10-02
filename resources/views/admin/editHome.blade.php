@extends('layouts.admin')

@section('content')
<section class="edit" id="edit">
    <h1 class="heading"> Tambah beranda </h1>
    <form action="">
        <div class="inputBox">
            <div class="input">
                <span>Nama obat</span>
                <input type="text" placeholder="Masukkan nama obat...">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Gambar obat</span>
                <input type="file" placeholder="Tambahkan Gambar...">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Deskripsi</span>
                <textarea name="" placeholder="Tambahkan deskripsi..." id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="Tambah" class="btn">
    </form>
</section>
@endsection
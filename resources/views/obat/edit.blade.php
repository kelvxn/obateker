@extends('layouts.admin')

@section('content')

<section class="edit" id="edit">
  <br><br><br><br><br><br>
    <h1 class="heading"> Edit obat </h1>
    <form action="{{ route('obats.update', ['obat' => $obat->id]) }}" method="POST">
      @method('PATCH')
      @csrf
      <div class="inputBox">
        <div class="input">
            <span>ID obat</span>
            <input type="text" class="form-control @error('id') is-invalid @enderror"
            id="id" name="id" value="{{ old('id') ?? $obat->id }}" placeholder="Masukkan ID obat...">
            @error('id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
        <div class="inputBox">
            <div class="input">
                <span>Nama obat</span>
                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                id="nama" name="nama" value="{{ old('nama') ?? $obat->nama}}" placeholder="Masukkan nama obat...">
                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Gambar obat</span>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                id="gambar" name="gambar" value="{{ old('gambar') ?? $obat->gambar}}" placeholder="Tambahkan Gambar...">
                @error('gambar')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Harga obat</span>
                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                id="harga" name="harga" value="{{ old('harga') ?? $obat->harga}}" placeholder="Tambahkan harga...">
                @error('harga')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" value="Tambah" class="btn">
    </form>
</section>
@endsection
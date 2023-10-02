@extends('layouts.master')

@section('content')
<section class="order" id="order">

    <h3 class="sub-heading"> order sekarang </h3>
    <h1 class="heading"> gratis dan murah </h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
          <div class="inputBox">
              <div class="input">
                  <span>ID order</span>
                  <input type="text" name="id" value="{{ old('id') }}" placeholder="Masukkan nama Anda...">
                  @error('id')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
              </div>
      <div class="input">
          <span>nama lengkap</span>
          <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama Anda...">
          @error('nama')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
      </div>
  </div>
  <div class="inputBox">
      <div class="input">
          <span>no.hp</span>
          <input type="number" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan no. HP Anda...">
          @error('no_hp')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
      </div>
      <div class="input">
          <span>nama produk</span>
          <input type="text" name="produk" value="{{ old('produk') }}" placeholder="Masukkan nama obat...">
          @error('produk')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
      </div>
  </div>
  <div class="inputBox">
      <div class="input">
          <span>jumlah produk</span>
          <input type="number" name="jumlah" value="{{ old('jumlah') }}" placeholder="Masukkan jumlah obat...">
          @error('jumlah')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
      </div>
      <div class="input">
          <span>alamat</span>
          <textarea name="alamat" value="{{ old('alamat') }}" placeholder="Tambahkan alamat Anda..." id="" cols="30" rows="10">{{ old('alamat') }}</textarea>
          @error('alamat')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
      </div>
  </div>
  <div class="inputBox">
      <div class="input">
          <span>deskripsi tambahan</span>
          <textarea name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Tambahkan pesan..." id="" cols="30" rows="10">{{ old('deskripsi') }}</textarea>
          @error('deskripsi')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
      </div>
  </div>
  
          <input type="submit" value="Tambah" class="btn">
      </form>

{{--       

    <form action="">

        <div class="inputBox">
            <div class="input">
                <span>nama lengkap</span>
                <input type="text" placeholder="Masukkan nama Anda...">
            </div>
            <div class="input">
                <span>no.hp</span>
                <input type="number" placeholder="Masukkan no. HP Anda...">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>daftar order</span>
                <input type="text" placeholder="Masukkan nama obat...">
            </div>
            <div class="input">
                <span>jumlah obat</span>
                <input type="number" placeholder="Masukkan jumlah obat...">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>alamat</span>
                <textarea name="" placeholder="Tambahkan alamat Anda..." id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>deskripsi tambahan</span>
                <textarea name="" placeholder="Tambahkan pesan..." id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="Pesan" class="btn">

    </form> --}}

</section>
@endsection
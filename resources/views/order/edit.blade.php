@extends('layouts.admin')

@section('content')

<section class="edit" id="edit">
  <br><br><br><br><br><br>
    <h1 class="heading"> Edit order </h1>
    <form action="{{ route('orders.update', ['order' => $order->id]) }}" method="POST">
      @method('PATCH')
      @csrf
      <div class="inputBox">
        <div class="input">
            <span>ID order</span>
            <input type="text" name="id" value="{{ old('id')  ?? $order->id }}" placeholder="Masukkan nama Anda...">
            @error('id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
        </div>
<div class="input">
    <span>nama lengkap</span>
    <input type="text" name="nama" value="{{ old('nama') ?? $order->nama}}" placeholder="Masukkan nama Anda...">
    @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
</div>
      </div>
<div class="inputBox">
<div class="input">
    <span>no.hp</span>
    <input type="number" name="no_hp" value="{{ old('no_hp') ?? $order->no_hp }}" placeholder="Masukkan no. HP Anda...">
    @error('no_hp')
            <div class="text-danger">{{ $message }}</div>
            @enderror
</div>
<div class="inputBox">
<div class="input">
    <span>nama produk</span>
    <input type="text" name="produk" value="{{ old('produk') ?? $order->produk }}" placeholder="Masukkan nama obat...">
    @error('produk')
            <div class="text-danger">{{ $message }}</div>
            @enderror
</div>
</div>
<div class="inputBox">
<div class="input">
    <span>jumlah produk</span>
    <input type="number" name="jumlah" value="{{ old('jumlah') ?? $order->jumlah }}" placeholder="Masukkan jumlah obat...">
    @error('jumlah')
            <div class="text-danger">{{ $message }}</div>
            @enderror
</div>
<div class="input">
    <span>alamat</span>
    <textarea name="alamat" value="{{ old('alamat') ?? $order->alamat}}" placeholder="Tambahkan alamat Anda..." id="" cols="30" rows="10">{{ old('alamat') ?? $order->alamat}}</textarea>
    @error('alamat')
            <div class="text-danger">{{ $message }}</div>
            @enderror
</div>
</div>
<div class="inputBox">
<div class="input">
    <span>deskripsi tambahan</span>
    <textarea name="deskripsi" value="{{ old('deskripsi') ?? $order->deskripsi}}" placeholder="Tambahkan pesan..." id="" cols="30" rows="10">{{ old('deskripsi') ?? $order->deskripsi}}</textarea>
    @error('deskripsi')
            <div class="text-danger">{{ $message }}</div>
            @enderror
</div>
</div>
        <input type="submit" value="Tambah" class="btn">
    </form>
</section>
@endsection
@extends('layouts.admin')

@section('content')

<section class="edit" id="edit">
  <br><br><br><br><br><br>
    <h1 class="heading"> Tabel obat </h1>

    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
    
        <div class="py-4 d-flex justify-content-end align-items-center">
          <h2 class="me-auto">Tabel obat</h2>
          <a href="{{ route('obats.create') }}" class="btn btn-primary">Tambah obat</a>
        </div>
    
        @if(session()->has('pesan'))
            <div class="alert alert-success">
              {{ session()->get('pesan') }}
            </div>
        @endif
    
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($obats as $obat)
            <tr>
              <th>{{$loop->iteration}}</th>
              <td><a href="{{ route('obats.show',['obat' => $obat->id]) }}">{{$obat->id}}</a></td>
              <td>{{$obat->nama}}</td>
              <td><img src="/images/{{$obat->gambar}}" width="300px" alt="gambar tidak ditemukan"></td>
              <td>{{$obat->harga}}</td>
              <th><a href="{{ route('obats.edit',['obat' => $obat->id]) }}" class="btn btn-primary">Edit</a></th>
            </tr>
            @empty
              <td colspan="6" class="text-center">Tidak ada data...</td>
            @endforelse
          </tbody>
        </table>
        </div>
      </div>
    </div>
</section>
@endsection
@extends('layouts.admin')

@section('content')

<section class="edit" id="edit">
  <br><br><br><br><br><br>
    <h1 class="heading"> Detail obat </h1>


<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="pt-3 d-flex justify-content-end align-items-center">
      <h1 class="h2 me-auto">Detail {{$obat->nama}}</h1>
      <a href="{{ route('obats.edit',['obat' => $obat->id]) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('obats.destroy',['obat'=>$obat->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger ms-3">Hapus</button>
      </form>
    </div>
    <hr>
    @if(session()->has('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('pesan') }}
        </div>
    @endif

    <ul>
      <li>ID: {{$obat->id}} </li>
      <li>Nama: {{$obat->nama}} </li>
      <li>Gambar:
          {{$obat->gambar}}
      </li>
      <li>Harga: {{$obat->harga}} </li>
    </ul>

    </div>
  </div>
</div>

</section>
@endsection
@extends('layouts.admin')

@section('content')

<section class="edit" id="edit">
  <br><br><br><br><br><br>
    <h1 class="heading"> Tabel order </h1>

    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
    
        <div class="py-4 d-flex justify-content-end align-items-center">
          <h2 class="me-auto">Tabel order</h2>
          <a href="{{ route('orders.create') }}" class="btn btn-primary">Tambah order</a>
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
              <th>Nama Pemesan</th>
              <th>NO. HP</th>
              <th>Nama Produk</th>
              <th>Jumlah Produk</th>
              <th>Alamat</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($orders as $order)
            <tr>
              <th>{{$loop->iteration}}</th>
              <td><a href="{{ route('orders.show',['order' => $order->id]) }}">{{$order->id}}</a></td>
              <td>{{$order->nama}}</td>
              <td>{{$order->no_hp}}</td>
              <td>{{$order->produk}}</td>
              <td>{{$order->jumlah}}</td>
              <td>{{$order->alamat}}</td>
              <td>{{$order->deskripsi}}</td>
              <th><a href="{{ route('orders.edit',['order' => $order->id]) }}" class="btn btn-primary">Edit</a></th>
            </tr>
            @empty
              <td colspan="9" class="text-center">Tidak ada data...</td>
            @endforelse
          </tbody>
        </table>
        </div>
      </div>
    </div>
</section>
@endsection
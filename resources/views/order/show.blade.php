@extends('layouts.admin')

@section('content')

<section class="edit" id="edit">
  <br><br><br><br><br><br>
    <h1 class="heading"> Detail order </h1>


<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="pt-3 d-flex justify-content-end align-items-center">
      <h1 class="h2 me-auto">Detail {{$order->id}}</h1>
      <a href="{{ route('orders.edit',['order' => $order->id]) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('orders.destroy',['order'=>$order->id]) }}" method="POST">
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
      <li>ID: {{$order->id}} </li>
      <li>Nama Pemesan: {{$order->nama}} </li>
      <li>NO. HP: {{$order->no_hp}} </li>
      <li>Nama Produk: {{$order->produk}} </li>
      <li>Jumlah Produk: {{$order->jumlah}} </li>
      <li>Alamat: {{$order->alamat}} </li>
      <li>Deskripsi: {{$order->deskripsi}} </li>
    </ul>

    </div>
  </div>
</div>

</section>
@endsection
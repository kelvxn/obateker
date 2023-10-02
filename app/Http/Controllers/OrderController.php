<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;


class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $orders = order::all();
        return view('order.index',['orders' => $orders]);
    }

    public function create(){
        return view('order.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'id'            => 'required|unique:orders',
            'nama'          => 'required|max:100',
            'no_hp'        => 'required|numeric',
            'produk'         => 'required',
            'jumlah'         => 'required|numeric',
            'alamat'         => 'required',
            'deskripsi'         => '',
        ]);

        order::create($validateData);
  
        return redirect()->route('orders.index')->with('pesan',"Penambahan data {$validateData['nama']} berhasil");
    }

    public function show(order $order){
        return view('order.show',['order' => $order]);
    }

    public function edit(order $order){
        return view('order.edit',['order' => $order]);
    }

    public function update(Request $request, order $order){

        $validateData = $request->validate([
            'id'            => 'required|unique:orders,id,'.$order->id,
            'nama'          => 'required|max:100',
            'no_hp'         => 'required|numeric',
            'produk'        => 'required',
            'jumlah'        => 'required|numeric',
            'alamat'        => 'required',
            'deskripsi'     => '',
        ]);

        $order->update($validateData);
        return redirect()->route('orders.show',['order'=>$order->id])->with('pesan',"Update data {$validateData['id']} berhasil");
    }

    public function destroy(order $order){
        $order->delete();
        return redirect()->route('orders.index')->with('pesan',"Hapus data $order->nama berhasil");
    }
}

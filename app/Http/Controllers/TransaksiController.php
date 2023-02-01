<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    
    //menampilkan data
    public function indexr()
    {
        $transaksi = Transaksi::all();
        // dd($rental->toArray());
        return view ('h_peminjaman')->with('transaksi', $transaksi);
    }

    // menginput peminjaman dari katalog admin
    public function input(Request $request)
    {
        $requestData = $request->all();
        transaksi::create($requestData);
        return redirect('peminjaman')->with('flash_message', 'Input Addedd!'); 
    }
    // menampilkan data detail peminjaman
    public function detail($id)
    {
        $data=Transaksi::find($id);
        return view('h_detailpinjam',compact('data'));
    }
    // menghapus data peminjaman
    public function hapusx($id)
    {
        $data=Transaksi::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil Dihapus');
    }
   // menampilkan data peminjaman yang mau di update
   public function showx($id)
   {
       $data=Transaksi::find($id);
       return view('h_updatepinjam',compact('data'));
   }
   // menyimpan data peminjaman yang telah diupdate
   public function updatex(Request $request, $id)
   {
       $data=Transaksi::find($id);
       $data->status_pinjam=$request->get('status_pinjam');
       $data->save();
       return redirect()->route('indexr');

   }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}

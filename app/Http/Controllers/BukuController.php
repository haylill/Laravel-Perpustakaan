<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // menampilkan data
    public function index()
    {
        $buku = Buku::all();
        return view ('h_crudbuku')->with('buku', $buku);
    }

    // menyimpan data
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'photo' => 'mines: jpg,jpeg,png'
        // ]
        // );

        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
        $requestData["photo"] = '/storage/'.$path;

        // $file = $request->file('photo');
        // $name = 'FT'.date('Ymdhis').'.'.$request->file('photo')->getClientOriginalExtension();
        // $resize_foto = 'Image'::make($file->getRealPath());
        // $resize_foto->resize(200,200, function($constraint){
        //     $constraint->aspectRatio();
        // })->save('public/img/'.$name);

        Buku::create($requestData);
        return redirect('crudbuku')->with('flash_message', 'Input Addedd!'); 
    }

    // menampilkan data yang mau di update
    public function show($id)
    {
        $data=Buku::find($id);
        return view('h_updatebuku',compact('data'));
    }

    // menyimpan data buku yang telah diupdate
    public function update(Request $request, $id)
    {
        $data=Buku::find($id);
        $data->kode_buku=$request->get('kode_buku');
        $data->judul_buku=$request->get('judul_buku');
        $data->penulis_buku=$request->get('penulis_buku');
        $data->penerbit_buku=$request->get('penerbit_buku');
        $data->tahun=$request->get('tahun');
        $data->kategori=$request->get('kategori');
        $data->isbn=$request->get('isbn');
        $data->stok_buku=$request->get('stok_buku');
        $data->save();
        return redirect()->route('buku');

    }

    // menghapus data buku
    public function hapus($id)
    {
        $data=Buku::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil Dihapus');
    }
    // menampilkan data ke katalog user
    public function indexx()
    {
        $buku = Buku::all();
        return view ('h_katalog')->with('buku', $buku);
    }

    // menampilkan data ke katalog admin
    public function indexxx()
    {
        $buku = Buku::all();
        return view ('h_katalogadmin')->with('buku', $buku);
    }
    //menampilkan data buku ke input peminjaman
    public function showr($id)
    {
        $data=Buku::find($id);
        return view('h_inputpeminjaman',compact('data'));
    }
}

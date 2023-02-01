<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;


class EbookController extends Controller
{
    //menyimpan data ebook
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('cover')->getClientOriginalName();
        $path = $request->file('cover')->storeAs('images', $fileName, 'public'); 
        $requestData["cover"] = '/storage/'.$path;

        $fileName = time().$request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('files', $fileName, 'public'); 
        $requestData["file"] = '/storage/'.$path;

        Ebook::create($requestData);
        return redirect('crudebook')->with('flash_message', 'Input Addedd!'); 
    }

    //menampilkan data  setelah disimpan
    public function indexx()
    {
        $ebook = Ebook::all();
        return view ('h_crudebook')->with('ebook', $ebook);
    }

    //menampilkan data ke halaman home
    public function index()
    {
        $ebook = Ebook::all();
        return view ('h_home')->with('ebook', $ebook);
    }

    //menampilkan pdf untuk dibaca
    public function view($id)
    {
        $data=Ebook::find($id);
        return view('viewebook',compact('data'));
    }

    // menampilkan data yang mau di update
    public function show($id)
    {
        $data=Ebook::find($id);
        return view('h_updateebook',compact('data'));
    }

    // menyimpan data buku yang telah diupdate
    public function update(Request $request, $id)
    {
        $data=Ebook::find($id);
        $data->judul_ebook=$request->get('judul_ebook');
        $data->penulis_ebook=$request->get('penulis_ebook');
        $data->penerbit_ebook=$request->get('penerbit_ebook');
        $data->save();
        return redirect()->route('ebook');

    }

    // menghapus data buku
    public function hapus($id)
    {
        $data=Ebook::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil Dihapus');
    }
}

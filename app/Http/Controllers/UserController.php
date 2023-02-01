<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // menampilkan data
    public function indexp()
    {
        $pengguna = User::all();
        return view ('h_crudpengguna')->with('pengguna', $pengguna);
    }

    // menyimpan data
    public function inputp(Request $request)
    {
        $requestData = $request->all();
        User::create([
            'nomor_induk' => $request['nomor_induk'],
            'nama'=> $request['nama'],
            'level'=>$request['level'],
            'password'=>bcrypt($request['password']),
            
        ]);
        return redirect('crudpengguna')->with('flash_message', 'Input Addedd!');  
    }

    // menghapus data user
    public function hapusp($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil Dihapus');
    }
   // menampilkan data user yang mau di update
   public function showp($id)
   {
       $data=User::find($id);
       return view('h_updatepengguna',compact('data'));
   }
   // menyimpan data user yang telah diupdate
   public function updatep(Request $request, $id)
   {
        $data=User::find($id);
        $data->nomor_induk=$request->get('nomor_induk');
        $data->nama=$request->get('nama');
        $data->level=$request->get('level');
        $data->password=bcrypt($request->get('password'));
        $data->save();
        return redirect()->route('pengguna');
   }
}

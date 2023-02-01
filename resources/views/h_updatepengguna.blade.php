@extends('template.nav',['title'=> 'Menu Update Data User'])

@section('maincontent')

    <div class="parentcontent mx-5">
        <h2>Form Update Data User</h2>
        <form action="{{route('updatep',$data->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nomor Induk Pengguna</strong>
                        <input type="number" name="nomor_induk" id="nomor_induk" class="form-control" placeholder="masukkan nomor induk pengguna" value="{{$data->nomor_induk}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama pengguna" value="{{$data->nama}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Level</strong>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="level" id="level1" value='siswa'  checked>
                            <label class="form-check-label" for="level1">
                                Siswa
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="level" id="level2" value='pegawai'>
                            <label class="form-check-label" for="level2">
                                Pegawai
                            </label>
                        </div>  
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="level" id="level2" value='admin'>
                            <label class="form-check-label" for="level3">
                                Admin
                            </label>
                        </div> 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password</strong>
                        <input type="password" name="password" id="password" class="form-control" placeholder="masukkan password" value="{{$data->password}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
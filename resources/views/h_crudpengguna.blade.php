@extends('template.nav',['title'=> 'Menu CRUD User'])

@section('maincontent')

    <div class="parentcontent mx-5">
    <h2>Form  User</h2>
    <form action="{{route('inputp')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Induk User</strong>
                    <input type="number" name="nomor_induk" id="nomor_induk" class="form-control" placeholder="masukkan nomor induk user">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama User</strong>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama user">
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
                        <input class="form-check-input" type="radio" name="level" id="level3" value='admin'>
                        <label class="form-check-label" for="level3">
                            Admin
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password</strong>
                    <input type="password" name="password" id="password" class="form-control" placeholder="masukkan password user">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <br>
    <h2>Data User</h2>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">ID</th>  
            <th class="text-center">NOMOR INDUK</th>
            <th class="text-center">NAMA</th>
            <th class="text-center">LEVEL</th>
            <th class="text-center">PASSWORD</th>
            <th class="text-center">AKSI</th>
        </thead>
        <tbody>
            @foreach($pengguna as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td class="text-center">{{ $item->nomor_induk }}</td>
                <td class="text-center">{{ $item->nama }}</td>
                <td class="text-center">{{ $item->level }}</td>
                <td class="text-center">{{ $item->password }}</td>
                <td class="text-center"><a href="{{route('hapusp',$item->id)}}">Hapus</a> | <a href="{{route('showp',$item->id)}}">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @include('template.footer')
@endsection
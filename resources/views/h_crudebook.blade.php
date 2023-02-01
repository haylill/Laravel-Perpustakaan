@extends('template.nav',['title'=> 'Menu CRUD Ebook'])

@section('maincontent')

    <div class="parentcontent mx-5">
    <h2>Form  Ebook</h2>
    <form action="{{route('storeeb')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Ebook</strong>
                    <input type="text" name="judul_ebook" id="judul_ebook" class="form-control" placeholder="masukkan judul ebook">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penulis Ebook</strong>
                    <input type="text" name="penulis_ebook" id="penulis_ebook" class="form-control" placeholder="masukkan penulis ebook">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit Ebook</strong>
                    <input type="text" name="penerbit_ebook" id="penerbit_ebook" class="form-control" placeholder="masukkan penerbit ebook">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cover Ebook</strong>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>File PDF</strong>
                    <input class="form-control" name="file" type="file" id="file">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <br>
    <h2>Data Buku</h2>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">ID</th>  
            <th class="text-center">JUDUL</th>
            <th class="text-center">PENULIS</th>
            <th class="text-center">PENERBIT</th>
            <th class="text-center">COVER</th>
            <th class="text-center">AKSI</th>
        </thead>
        <tbody>
            @foreach($ebook as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td class="text-center">{{ $item->judul_ebook }}</td>
                <td class="text-center">{{ $item->penulis_ebook }}</td>
                <td class="text-center">{{ $item->penerbit_ebook }}</td>
                <td class="text-center">
                    <img src="{{ asset($item->cover) }}" width= '70' height='100' class="img img-responsive" />
                </td>
                <td class="text-center"><a href="{{route('hapuseb',$item->id)}}">Hapus</a> | <a href="{{route('showeb',$item->id)}}">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @include('template.footer')
@endsection
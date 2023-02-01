@extends('template.nav',['title'=> 'Menu Update Ebook'])

@section('maincontent')

    <div class="parentcontent mx-5">
        <h2>Form Update Ebook</h2>
        <form action="{{route('updateeb',$data->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul Ebook</strong>
                        <input type="text" name="judul_ebook" id="judul_ebook" class="form-control" placeholder="masukkan judul ebook" value="{{$data->judul_ebook}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penulis Ebook</strong>
                        <input type="text" name="penulis_ebook" id="penulis_ebook" class="form-control" placeholder="masukkan penulis ebook" value="{{$data->penulis_ebook}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penerbit Ebook</strong>
                        <input type="text" name="penerbit_ebook" id="penerbit_ebook" class="form-control" placeholder="masukkan penerbit ebook" value="{{$data->penerbit_ebook}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@extends('template.nav',['title'=> 'Menu Update Buku'])

@section('maincontent')

    <div class="parentcontent mx-5">
        <h2>Form Update Buku</h2>
        <form action="{{route('update',$data->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Buku</strong>
                        <input type="text" name="kode_buku" id="kode_buku" class="form-control" placeholder="masukkan kode buku" value="{{$data->kode_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul Buku</strong>
                        <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="masukkan judul buku" value="{{$data->judul_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penulis Buku</strong>
                        <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" placeholder="masukkan penulis buku" value="{{$data->penulis_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penerbit Buku</strong>
                        <input type="text" name="penerbit_buku" id="penerbit_buku" class="form-control" placeholder="masukkan penerbit buku" value="{{$data->penerbit_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun</strong>
                        <input type="text" name="tahun" id="tahun" class="form-control" placeholder="masukkan tahun terbit" value="{{$data->tahun}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kategori</strong>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori1" value='Paket Umum'  checked>
                            <label class="form-check-label" for="kategori1">
                                Paket Umum
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori2" value='Paket Pertambangan'>
                            <label class="form-check-label" for="kategori2">
                                Paket Pertambangan
                            </label>
                        </div>  
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori3" value='Paket Pengelasan'>
                            <label class="form-check-label" for="kategori3">
                                Paket Pengelasan
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori4" value='Paket RPL'>
                            <label class="form-check-label" for="kategori4">
                                Paket RPL
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori5" value='Paket Perhotelan'>
                            <label class="form-check-label" for="kategori5">
                                Paket Perhotelan
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori6" value='Paket Boga'>
                            <label class="form-check-label" for="kategori6">
                                Paket Boga
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori7" value='Paket Peternakan'>
                            <label class="form-check-label" for="kategori7">
                                Paket Peternakan
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori8" value='Sastra'>
                            <label class="form-check-label" for="kategori8">
                                Sastra
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori9" value='Umum'>
                            <label class="form-check-label" for="kategori9">
                                Umum
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori10" value='Pertambangan'>
                            <label class="form-check-label" for="kategori10">
                                Pertambangan
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori11" value='Pengelasan'>
                            <label class="form-check-label" for="kategori11">
                                Pengelasan
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori12" value='RPL'>
                            <label class="form-check-label" for="kategori12">
                                RPL
                            </label>
                        </div> 
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori13" value='Perhotelan'>
                            <label class="form-check-label" for="kategori13">
                                Perhotelan
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori14" value='Boga'>
                            <label class="form-check-label" for="kategori14">
                                Boga
                            </label>
                        </div>  
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="kategori" id="kategori15" value='Peternakan'>
                            <label class="form-check-label" for="kategori15">
                                Peternakan
                            </label>
                        </div> 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ISBN</strong>
                        <input type="text" name="isbn" id="isbn" class="form-control" placeholder="masukkan nomor isbn" value="{{$data->isbn}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Stok Buku</strong>
                        <input type="text" name="stok_buku" id="stok_buku" class="form-control" placeholder="masukkan stok buku" value="{{$data->stok_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
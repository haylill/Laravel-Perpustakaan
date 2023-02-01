@extends('template.nav',['title'=> 'Menu CRUD Buku'])

@section('maincontent')

    <div class="parentcontent mx-5">
    <h2>Form  Katalog</h2>
    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Buku</strong>
                    <input type="text" name="kode_buku" id="kode_buku" class="form-control" placeholder="masukkan kode buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Buku</strong>
                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="masukkan judul buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penulis Buku</strong>
                    <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" placeholder="masukkan penulis buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit Buku</strong>
                    <input type="text" name="penerbit_buku" id="penerbit_buku" class="form-control" placeholder="masukkan penerbit buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Terbit</strong>
                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="masukkan tahun terbit buku">
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
                        <label class="form-check-label" for="kategori4">
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
                    <input type="text" name="isbn" id="isbn" class="form-control" placeholder="masukkan nomor isbn buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok Buku</strong>
                    <input type="text" name="stok_buku" id="stok_buku" class="form-control" placeholder="masukkan stok buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Foto Buku</strong>
                    <input class="form-control" name="photo" type="file" id="photo" onchange="readFoto(event)">
                </div>
            </div>
            <img id='output' style="width: 100px;">
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
            <th class="text-center">KODE</th>
            <th class="text-center">JUDUL</th>
            <th class="text-center">PENULIS</th>
            <th class="text-center">PENERBIT</th>
            <th class="text-center">TAHUN</th>
            <th class="text-center">KATEGORI</th>
            <th class="text-center">ISBN</th>
            <th class="text-center">STOK</th>
            <th class="text-center">GAMBAR</th>
            <th class="text-center">AKSI</th>
        </thead>
        <tbody>
            @foreach($buku as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td class="text-center">{{ $item->kode_buku }}</td>
                <td class="text-center">{{ $item->judul_buku }}</td>
                <td class="text-center">{{ $item->penulis_buku }}</td>
                <td class="text-center">{{ $item->penerbit_buku }}</td>
                <td class="text-center">{{ $item->tahun }}</td>
                <td class="text-center">{{ $item->kategori }}</td>
                <td class="text-center">{{ $item->isbn }}</td>
                <td class="text-center">{{ $item->stok_buku }}</td>
                <td class="text-center">
                    <img src="{{ asset($item->photo) }}" width= '70' height='100' class="img img-responsive" />
                </td>
                <td class="text-center"><a href="{{route('hapus',$item->id)}}">Hapus</a> | <a href="{{route('show',$item->id)}}">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @include('template.footer')
    <script type="text/javascript">
        var readFoto= function(event){
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var output = document.getElementById('output');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }; 
    </script>
@endsection
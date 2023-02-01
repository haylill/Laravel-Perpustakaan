@extends('template.nav',['title'=> 'Menu Input Peminjaman'])
    @section('maincontent')
    
    <div class="parentcontent mx-5">
        <h2>Form Peminjaman</h2>
        <form action="{{route('input')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NOMOR INDUK</strong>
                        <input type="text" name="nomor_induk_peminjam" id="nomor_induk_peminjam" class="form-control" placeholder="masukkan nomor induk peminjam" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NAMA</strong>
                        <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" placeholder="masukkan nama peminjam">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>KODE BUKU</strong>
                        <input type="text" name="kode_buku" id="kode_buku" class="form-control" readonly value="{{$data->kode_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>JUDUL BUKU</strong>
                        <input type="text" name="judul_buku" id="judul_buku" class="form-control" readonly value="{{$data->judul_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PENULIS BUKU</strong>
                        <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" readonly value="{{$data->penulis_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PENERBIT BUKU</strong>
                        <input type="text" name="penerbit_buku" id="penerbit_buku" class="form-control" readonly value="{{$data->penerbit_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TAHUN TERBIT</strong>
                        <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" readonly value="{{$data->tahun}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>KATEGORI</strong>
                        <input type="text" name="kategori" id="kategori" class="form-control" readonly value="{{$data->kategori}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ISBN</strong>
                        <input type="text" name="isbn" id="isbn" class="form-control" readonly value="{{$data->isbn}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL PINJAM</strong>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" placeholder="masukkan tanggal pinjam">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL DIKEMBALIKAN</strong>
                        <input type="date" name="tgl_dikembalikan" id="tgl_dikembalikan" class="form-control" placeholder="masukkan rencana tanggal pengembalian buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>STATUS PINJAM</strong>
                        <input type="text" name="status_pinjam" id="status_pinjam" class="form-control"  readonly value="baru">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    
    @include('template.footer')
@endsection
<!-- <link rel="stylesheet" href="{{asset('js/app.js')}}"> -->


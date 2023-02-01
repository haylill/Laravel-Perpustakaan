@extends('template.nav',['title'=> 'Menu Update Peminjaman'])

@section('maincontent')

<div class="parentcontent mx-5">
        <h2>Form Peminjaman</h2>
        <form action="{{route('updatex',$data->id)}}" method="POST">
            @csrf
            <div class="row">
                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NOMOR INDUK PEMINJAMAN</strong>
                        <input type="number" name="nomor_induk_peminjam" id="nomor_induk_peminjam" class="form-control" placeholder="masukkan nomor induk peminjam" value="{{$data->nomor_induk_peminjam}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NAMA</strong>
                        <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" placeholder="masukkan nama peminjam" value="{{$data->nama_peminjam}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>KODE BUKU</strong>
                        <input type="text" name="kode_buku" id="kode_buku" class="form-control" placeholder="masukkan kode buku" value="{{$data->kode_buku}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>JUDUL BUKU</strong>
                        <input type="text" name="judul_buku" id="judul_buku" class="form-control"  placeholder="masukkan judul buku" value="{{$data->judul_buku}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PENULIS BUKU</strong>
                        <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" placeholder="masukkan penulis buku" value="{{$data->penulis_buku}}" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PENERBIT BUKU</strong>
                        <input type="text" name="penerbit_buku" id="penerbit_buku" class="form-control"  placeholder="masukkan penerbit buku" value="{{$data->penerbit_buku}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TAHUN TERBIT</strong>
                        <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control"  placeholder="masukkan tahun terbit" value="{{$data->tahun_terbit}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>KATEGORI</strong>
                        <input type="text" name="kategori" id="kategori" class="form-control" value="{{$data->kategori}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ISBN</strong>
                        <input type="text" name="isbn" id="isbn" class="form-control"  placeholder="masukkan nomor isbn" value="{{$data->isbn}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL PINJAM</strong>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" placeholder="masukkan tanggal pinjam" value="{{$data->tgl_pinjam}}>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TANGGAL DIKEMBALIKAN</strong>
                        <input type="date" name="tgl_dikembalikan" id="tgl_dikembalikan" class="form-control" placeholder="masukkan rencana tanggal pengembalian buku" value="{{$data->tgl_dikembalikan}}>
                    </div>
                </div> -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>STATUS PINJAM</strong>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="status_pinjam" id="status_oinjam1" value='baru'  checked>
                            <label class="form-check-label" for="status_pinjam1">
                                Baru
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="status_pinjam" id="status_pinjam2" value='selesai'>
                            <label class="form-check-label" for="status_pinjam2">
                                Selesai
                            </label>
                        </div>     
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@extends('template.nav',['title'=> 'Menu Detail Peminjaman'])

@section('maincontent')
<div class="parentcontent mx-5">
    <h2>Detail Peminjaman</h2>
    <table class="table table-bordered mx-3">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $data->id }}</td>
            </tr>
            <tr>
                <td>NOMOR INDUK</td>
                <td>{{ $data->nomor_induk_peminjam }}</td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>{{ $data->nama_peminjam }}</td>
            </tr>
            <tr>
                <td>KODE BUKU</td>
                <td>{{ $data->kode_buku }}</td>
            </tr>
            <tr>
                <td>JUDUL</td>
                <td>{{ $data->judul_buku }}</td>
            </tr>
            <tr>
                <td>PENULIS</td>
                <td>{{ $data->penulis_buku }}</td>
            </tr>
            <tr>
                <td>PENERBIT</td>
                <td>{{ $data->penerbit_buku }}</td>
            </tr>
            <tr>
                <td>TAHUN TERBIT</td>
                <td>{{ $data->tahun_terbit }}</td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td>{{ $data->kategori }}</td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td>{{ $data->isbn }}</td>
            </tr>
            <tr>
                <td>TANGGAL PINJAM</td>
                <td>{{ $data->tgl_pinjam }}</td>
            </tr>
            <tr>
                <td>TANGGAL DIKEMBALIKAN</td>
                <td>{{ $data->tgl_dikembalikan }}</td>
            </tr>
            <tr>
                <td>STATUS RENTAL</td>
                <td>{{ $data->status_pinjam }}</td>
            </tr>
        </tbody>
    </table>
</div>
    
    @include('template.footer')
@endsection
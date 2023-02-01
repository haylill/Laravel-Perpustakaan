@extends('template.nav',['title'=> 'Menu Administrasi Peminjaman'])
@section('maincontent')
<div class="parentcontent mx-5">
    <h2>Data Peminjaman</h2>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">ID</th>  
            <th class="text-center">NOMOR</th>
            <th class="text-center">NAMA</th>
            <th class="text-center">KODE BUKU</th>
            <th class="text-center">JUDUL</th>
            <th class="text-center">PENULIS</th>
            <th class="text-center">ISBN</th>
            <th class="text-center">STATUS</th>
            <th class="text-center">AKSI</th>
        </thead>
        <tbody>
            @foreach($transaksi as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td class="text-center">{{ $item->nomor_induk_peminjam }}</td>
                <td class="text-center">{{ $item->nama_peminjam }}</td>
                <td class="text-center">{{ $item->kode_buku }}</td>
                <td class="text-center">{{ $item->judul_buku }}</td>
                <td class="text-center">{{ $item->penulis_buku }}</td>
                <td class="text-center">{{ $item->isbn }}</td>
                <td class="text-center">{{ $item->status_pinjam }}</td>
                <td class="text-center"><a href="{{route('detail',$item->id)}}">Detail</a> | <a href="{{route('hapusx',$item->id)}}">Hapus</a> | <a href="{{route('showx',$item->id)}}">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
    @include('template.footer')
@endsection
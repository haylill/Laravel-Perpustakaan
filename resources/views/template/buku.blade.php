<!-- buku -->
<div class="row mx-4">
    @foreach($buku as $item)
        <div class="col-sm-4">
            <div class="mb-4">
                <div class="card">
                    <div class="card-body" style="padding:10px">
                        <div class="row">
                            <div class="col">
                                <div style="max-height:300px; max-width:180px; margin:auto; overflow:hidden;">
                                    <img src="{{ asset($item->photo) }}" class="card-img-top" alt="ini gambar buku">
                                </div> 
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="line-height: 0.9;">{{ $item->judul_buku }}</h5>
                                    <p class="card-text text-center" style="line-height: 0.5;">{{ $item->penulis_buku }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <ul class="list-group list-group-flush" >
                                            <li class="list-group-item" style="line-height: 0.3;">Kode</li>
                                            <li class="list-group-item" style="line-height: 0.3;">Penerbit</li>
                                            <li class="list-group-item" style="line-height: 0.3;">Tahun</li>
                                            <li class="list-group-item" style="line-height: 0.3;">Kategori</li>
                                            <li class="list-group-item" style="line-height: 0.3;">ISBN</li>
                                            <li class="list-group-item" style="line-height: 0.3;">Stok</li>
                                        </ul>
                                    </div>
                                    <div class="col-8">
                                        <ul class="list-group list-group-flush" >
                                            <li class="list-group-item" style="line-height: 0.3; letter-spacing: -1px;">{{ $item->kode_buku }}</li>
                                            <li class="list-group-item" style="line-height: 0.3; letter-spacing: -1px;">{{ $item->penerbit_buku }}</li>
                                            <li class="list-group-item" style="line-height: 0.3; letter-spacing: -1px;">{{ $item->tahun }}</li>
                                            <li class="list-group-item" style="line-height: 0.3; letter-spacing: -1px;"> {{ $item->kategori }}</li>
                                            <li class="list-group-item" style="line-height: 0.3; letter-spacing: -1px;">{{ $item->isbn }}</li>
                                            <li class="list-group-item" style="line-height: 0.3; letter-spacing: -1px;">{{ $item->stok_buku }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<!-- end cars -->
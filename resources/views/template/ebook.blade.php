<!-- ebook -->
<div class="row mx-4">
    @foreach($ebook as $item)
        <div class="col-sm-3">
            <div class="mb-4">
                <div class="card">
                    <div class="card-body" style="padding:10px">
                        <div class="row">
                            <div class="col">
                                <div style="max-height:300px; max-width:180px; margin:auto; overflow:hidden;">
                                    <img src="{{ asset($item->cover) }}" class="card-img-top" alt="ini gambar buku">
                                </div>                                 
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="line-height: 0.5;">{{ $item->judul_ebook }}</h5>
                                    <p class="card-text text-center" style="line-height: 0.5;">{{ $item->penulis_ebook }}</p>
                                    <a href="{{route('view',$item->id)}}" class="btn btn-primary ">Baca</a>
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
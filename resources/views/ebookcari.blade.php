@extends('template.nav',['title'=> 'Home'])

@section('maincontent')
<div class="col-md-10">
    <form method="GET" action="{{url('/mahasiswa.cari')}}">
        <div class="form-group row">
            <div class="col-md-3">
                <input type="text" name="cari" class="form-control">
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary">cari</button>
            </div>
        </div>
    </form>
    </div>
    @include('template.ebook')
   
    @include('template.footer')
@endsection
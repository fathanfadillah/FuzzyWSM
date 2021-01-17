@extends('layout/main')

@section('title','| Hasil Rekomendasi')

@section('container')
<div class="container-md h-50 mt-5 pt-5">
    <div class="jumbotron">
        <div class="text-center">
            ​
            <!-- <source srcset="..." type="image/svg+xml" /> -->
            <img src="{{asset('assets/no_laptop.png')}}"
                class="img-fluid h-25" alt="" width="25%" />

            <h1 class="display-4 mt-2">HASIL REKOMENDASI</h1>
            <!-- <p class="lead">
						This is a simple hero unit, a simple jumbotron-style component for
						calling extra attention to featured content or information.
                    </p> -->
        </div>

        <hr class="my-4" />
            @foreach ($laptops as $l)
                <h2 class="text-center">{{$l->nama}}</h2>
            @endforeach
        <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
    </div>
</div>

<center>
    <a class="font-weight-bold rekomendasi-btn" href="{{url('/')}}"><i class="icon-arrow-left mr-2"></i>KEMBALI</a>
</center>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
$(document).ready( function(){
    $("nav").hide();     
});
</script>
   
@endsection
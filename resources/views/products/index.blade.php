@extends('layout/main')

@section('title','Product')

@section('container')
<!-- 
@if (session('status'))
    <script>
        alert({{ session('status') }});		
    </script>
@endif -->
@if (session('status'))
<script>
alert('{{ session('
    status ') }}');
</script>
@endif
<div class="container-md">
    <div class="jumbotron">
        <div class="text-center">
            <!-- <source srcset="..." type="image/svg+xml" /> -->
            <img src="data:image/jpeg;base64,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"
                class="img-fluid img-thumbnail" alt="" width="25%" />

            <h1 class="display-4">WELCOME</h1>
            <!-- <p class="lead">
						This is a simple hero unit, a simple jumbotron-style component for
						calling extra attention to featured content or information.
					</p> -->
        </div>

        <hr class="my-4" />
        <p class="text-center">
            It uses utility classes for typography and spacing to space content
            out within the larger container.
        </p>
        <a href="{{url('/profile')}}" class="btn btn-success">LIHAT REKOMENDASI</a>
        <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
    </div>
</div>

<div class="container-md justify-content-center">

    @foreach($products as $pdt)
    <div class="row">

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        @csrf
                        <a href="/product/{{$pdt->id}}">
                            <h5 class="card-title">{{$pdt->nama}}</h5>
                        </a>
                    </form>
                    <!-- <p class="card-text" >{{$pdt->storage}} GB</p> -->
                    <p class="card-text">Rp.{{$pdt->harga}},-</p>

                    <img src="{{'/storage/posts_image/' . $pdt->foto}}" alt="" style="height:100px; width:100px;">
                    <p class="text-right"><a href="#" class="btn btn-primary ">BUY</a></p>
                </div>
            </div>

        </div>

    </div>
    @endforeach

    <a href="/product/create" class=" btn btn-danger btn-block my-2">TAMBAH</a>

</div>
@stop
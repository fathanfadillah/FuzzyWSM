<div>
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
</div>
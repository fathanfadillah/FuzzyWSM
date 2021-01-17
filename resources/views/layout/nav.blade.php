<nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-md">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- <a class="navbar-brand" href="#">Hidden brand</a> -->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/')}}">Home
                        <!-- <span class="sr-only">(current)</span> -->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/profile')}}">Product</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link " href="{{url('/about')}}">About</a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link " href="{{url('/product')}}">Product</a> --}}
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 d-inline" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success d-inline" type="submit">
                    Search
                </button>
            </form> --}}

            <div class="ml-4">
                {{-- <a href="{{url('/login')}}">
                    {{-- {{ Auth::user()->name }} 
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-success "
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </a> --}}



            </div>
        </div>
    </div>
</nav>
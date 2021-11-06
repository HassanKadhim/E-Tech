<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background:rgba(1, 4, 136, 0.9)">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
             {{--<h1><a href="index.html"><span>Name</span></a></h1> --}}
             <!-- Uncomment below if you prefer to use an image logo -->
             <a href="{{route('index')}}"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>
            <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="{{route('index')}}">{{$title}}</a></li>
        </ul>
            </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
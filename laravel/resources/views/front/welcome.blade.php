@extends('front.layouts.master')
@section('content')

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Odalar</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Hizmetler</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Galeri</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#iletisim">İletisim</a></li>
        </ul>
    </div>
    </div>
    </nav>

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold baslik">POLLA BUTİK OTEL</h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white font-weight-light mb-6">Best otelleri arasında Polla'nın harika ambiyansında, yemyeşil bahçeler, masmavi deniz, eşsiz bir dekorasyon ve ömür boyu unutamayacağınız müthiş bir tatil sizleri bekliyor.</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Keşfet</a>
            </div>
        </div>
    </div>
</header>
<style>
    .font{
        margin-top: -50px;
        font-family: Papyrus;
    }
</style>
<section id="about" class="page-section">
    <div>
        <h1 align="center" class="font">ODALAR</h1>
        <hr color="black" width="50%">
    </div>
    @foreach($categories as $category)
        <section class=" bg-primary about">
            <div class="row container col-md-12 mb-5">
                <div class="row justify-content-center col-md-6 mt-5">
                    <img src="{{asset($category->image)}}" class="img-thumbnail rounded" width="500">
                </div>
                <div class="justify-content-center col-md-6 mt-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">{{$category->title}}</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">{{$category->description}}</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="{{route('home.category',$category->id)}}">Rezervasyon yap</a>
                    </div>
                </div>
            </div>
            <hr>
        </section>
    @endforeach
</section>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <h2 class="text-center mt-0">Hizmetlerimiz</h2>
        <hr class="divider my-4" />
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Eşsiz Tasarım</h3>
                    <p class="text-muted mb-0">Polla'nın harika ambiyansı, yemyeşil bahçeleri, masmavi denizi ve eşsiz dekorasyonları.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Sınırsız Erişim</h3>
                    <p class="text-muted mb-0">Sağlamış olduğumuz sınırsız internet ile sınırsız erişim</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Tatil Merkezi</h3>
                    <p class="text-muted mb-0">Bulunduğu konumu ve doğallığı ile tatil başucunuzda.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Aşk ile Yap</h3>
                    <p class="text-muted mb-0">Otelimizde bulunan bütün çalışanlarımızın işlerini aşk ile yaptıklarını garanti veriyoruz.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection


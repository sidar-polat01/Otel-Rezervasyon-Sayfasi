@extends('front.layouts.master')
@section('title','Otel')
@section('content')
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home.index')}}">Ana Sayfa</a></li>
        </ul>
    </div>
</div>
</nav>
    <style>
        .navbar-nav{
            margin-left: 800px;
        }
        .rezerve{
            font-family: 'Poppins', sans-serif;
            font-size: 22px;
        }
        .kutu{
            margin-top: -30px;
        }

        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>
    <header class="mastheada">
        <div class="row">
            <div class="col-md-7">
                <section class="about" id="about">
                    <div class="container col-md-12 mt-3">
                        <div class="row justify-content-center">
                            <img src="{{asset($category->image)}}" class="img-thumbnail rounded" width="500">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h2 class="text-white mt-1">{{$category->title}}</h2>
                                <hr class="divider light my-4" />
                                <p class="text-white mb-4">{{$category->description}}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </section>
            </div>
            <div class="card col-md-3 ml-3 mt-3" style="margin-bottom: 150px">
                <div class="row card-header py-3 justify-content-center">
                    <!--<div class="fa fa-calendar mr-2"></div>-->
                    <img class="mr-3" src="https://www.pngall.com/wp-content/uploads/2016/10/Calendar-Download-PNG.png" alt="" width="30px">
                    <h6 class="m-0 font-weight-bold rezerve">REZERVASYON YAP</h6>
                </div>
                <div class="my-5">
                    <form method="post" action="{{route('home.rezerve')}}">
                        @csrf
                        <div class="form-floating kutu">
                            <input class="mb-3 form-control" name="name" type="text" placeholder="Adınız" required/>
                            <input class="mb-3 form-control" name="email" type="email" placeholder="Email Adresiniz" required/>
                            <input class="mb-3 form-control" name="number" type="number" placeholder="Telefon Numaranız" required/>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <select class="form-control" name="parent">
                                        <option disabled selected>Yetişkin</option>
                                        <option>1</option>
                                        <option>2</option>
                                        @if($category->slug>11)<option>3</option>@endif
                                        @if($category->slug>21)<option>4</option>@endif
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="child">
                                        <option disabled selected>Çocuk</option>
                                        <option>1</option>
                                        <option>2</option>
                                        @if($category->slug>11)<option>3</option>@endif
                                        @if($category->slug>21)<option>4</option>@endif
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="start" style="font-size: 13px">Başlangıç Tarihi</label>
                                    <input class="form-control" id="start" name="started_at" type="date" value="2021-10-31" required/>
                                </div>
                                <div class="col-md-6">
                                    <label for="start" style="font-size: 13px">Bitiş Tarihi</label>
                                    <input class="form-control" id="finish" name="finished_at" type="date" required/>
                                </div>

                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            <input hidden class="form-control" name="type" type="text" placeholder="{{$category->title}}" value="{{$category->title}}"/>
                        </div>
                        <br>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <div class="form-group">
                            <button class="btn btn-secondary" id="" type="submit">REZERVASYON YAP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
@endsection

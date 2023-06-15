@extends('frontend.app')
@section('title')
    Home
@endsection
@section('content')
    @if (Session::has('success'))
        <div class="alert success bg-dark">
            <span class="closebtn">&times;</span>
            <strong>Success!</strong> Your Order Has beeen Addedd successfully.
        </div>
    @endif

    <x-header :categoriers="$categoriers" :count="$count"></x-header>

    <!-- Hero Section Begin -->
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

        .alert.success {
            background-color: black;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        #main-title {
            color: #8eabff;
            font-size: 37px;
            font-weight: bold;
            margin-top: 23px;
        }
    </style>



    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ url('frontend/img/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="{{ route('frontend.shop') }}" class="primary-btn" style="background: #8eabff;">Shop
                                    now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{ url('frontend/img/hero/hero-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="{{ route('frontend.shop') }}" class="primary-btn" style="background: #8eabff">Shop
                                    now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->



    <!-- Product Section Begin -->
    <section class="product spad">

        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <ul class="filter__controls text-uppercase">
                        <li id="main-title">New arrivals
                        </li>

                    </ul>
                </div>
            </div>

            <div class="row product__filter">

                @foreach ($newProducts as $newProduct)
                    <x-new-product :newProduct="$newProduct"></x-new-product>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Product Section End -->
@endsection

@section('scripts')
    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function() {
                    div.style.display = "none";
                }, 600);
            }
        }
    </script>
@endsection

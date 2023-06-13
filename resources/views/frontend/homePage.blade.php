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

    <section class="hero">

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
        <div class="hero__slider owl-carousel">
            <div>
                <img src="{{ url('uploads/shop.jpg') }}" />
            </div>
        </div>
    </section>




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

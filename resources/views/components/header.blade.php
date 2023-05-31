@props(['categoriers'])
<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{URL('/')}}"><img src="{{asset('frontend/img/logo.png')}}" width='180' alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                        <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                        <li><a>categories</a>
                            <ul class="dropdown">
                                @foreach ($categoriers as $categorier)
                                    <li><a
                                            href="{{ route('frontend.category_name', $categorier->id) }}">{{ $categorier->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                    <a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('frontend/img/icon/cart.png') }}" alt="">
                        <span>0</span></a>
                    <div class="price">$0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->

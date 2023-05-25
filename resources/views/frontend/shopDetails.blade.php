@extends('frontend.app')
@section('title')
    product Details
@endsection
@section('content')
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg"
                                        data-setbg="{{ url('frontend/img/product/' . $product->image) }}">
                                    </div>
                                </a>
                            </li>

                            @foreach ($product_images as $product_image)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="{{ '#tabs-' . $product_image->id }}"
                                        role="tab">
                                        <div class="product__thumb__pic set-bg"
                                            data-setbg="{{ asset('frontend/img/product/' . $product_image->image) }}">
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-9 custom-img">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img style="border : solid 1px blacl;"
                                        src="{{ url('frontend/img/product/' . $product->image) }} " alt="">
                                </div>
                            </div>

                            @foreach ($product_images as $product_image)
                                <div class="tab-pane" id="{{ 'tabs-' . $product_image->id }}" role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <img src="{{ asset('frontend/img/product/' . $product_image->image) }}"
                                            alt="">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{ $product->name }}</h4>
                            <h3>{{ $product->price }} DH
                                @if ($product->discount_price)
                                    <span>{{ $product->discount_price }} DH </span>
                                @endif
                            </h3>
                            <p>
                                {{ $product->description }}
                            </p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    @foreach ($product_sizes as $size)
                                        <label for="{{ $size->size }}">{{ $size->size }}
                                            <input type="radio" id="{{ $size->size }}">
                                        </label>
                                    @endforeach
                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>
                                    @foreach ($product_colors as $product_color)
                                        <label class="{{ $product_color->color }}" for="{{ 'sp-' . $product_color->id }}">
                                            <input type="radio" id="{{ 'sp-' . $product_color->id }}">
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <a href="#" class="primary-btn">add to cart</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Guaranteed Safe Checkout</span></h5>
                                <img src="img/shop-details/details-payment.png" alt="">
                                <ul>
                                    <li><span>Categories:</span> {{ $product_categorie }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($RelatedProducts as $RelatedProduct)
                    <x-RelatedProduct :RelatedProduct="$RelatedProduct"></x-RelatedProduct>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->
@endsection

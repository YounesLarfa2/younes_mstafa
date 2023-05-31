@extends('frontend.app')
@section('title')
    product Details
@endsection
@section('content')
        <!--header -->
        <x-header :categoriers="$categoriers"></x-header>
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
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
                            <form method="POST" action="{{rout('cart.')}}">
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
                                        <label class="color-check" style="background-color : {{ $product_color->color }}" for="{{ 'sp-' . $product_color->id }}">
                                            <input type="radio" id="{{ 'sp-' . $product_color->id }}">
                                        </label>
                                    @endforeach
                                </div>
                                <script>
                                    var color_check = document.querySelectorAll(".color-check");
                                    color_check.forEach(item => {
                                        item.addEventListener('click',function (){
                                            item.style.opacity = '0.5'
                                        })
                                    })
                                </script>
                            </div>
                            </form>

                            @section('scripts')
                                <script>
                                    $(document).ready(function() {
                                            $.ajaxSetup({
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                }
                                            });

                                            showMember();

                                            $('#add-cart').on('click', function(e) {
                                                e.preventDefault();
                                                var color = $(this).serialize();
                                                var url = $(this).attr('action');
                                                $.ajax({
                                                    type: 'POST',
                                                    url: url,
                                                    data: form,
                                                    dataType: 'json',
                                                    success: function() {
                                                        $('#addnew').modal('hide');
                                                        $('#addForm')[0].reset();
                                                        showMember();
                                                    }
                                                });
                                            });

                                            function showMember(){
                                                $.get("{{ route('admin.categories.list') }}", function(data){

                                                    $('#memberBody').empty().html(data);
                                                })
                                            }
                                        })
                                </script>
                            @endsection
                            <div class="product__details__last__option ">
                                <img src="{{asset('uploads/'. $product->image)}}" alt="">
                                <div class="product__details__cart__option">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                    <a href="#" id="add-cart" class="primary-btn my-4">add to cart</a>
                                </div>
                                <h4>Availability : 40</h4>
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

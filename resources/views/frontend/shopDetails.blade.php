@extends('frontend.app')
@section('title')
product Details
@endsection
@section('content')
<!--header -->
<x-header :categoriers="$categoriers" :count="$count"></x-header>

<!-- Shop Details Section Begin -->
<section class="shop-details">
    <div class="product__details__content">
        <div class="container">
            <form id='add-cart-form' method="POST" action="{{route('add_to_cart',$product->id)}}">
                @csrf
                <div class="row d-flex justify-content-center align-items-center my-5">
                    <div class="col-lg-6  " id="prd_id" prd_id={{$product->id}}>
                        <div class="">
                            <div class="row justify-content-between pb-5">
                                <div class="text-dark col-sm-6 w-75">
                                    <h3 class="badge  w-75 py-2" style="font-size: 25px">Name</h3>
                                </div>
                                <h3 class="col-sm-6 fs-4  " style="text-align: end">
                                    {{$product->name}}
                                    <input type="hidden" name="name" value="{{$product->name}}" />
                                </h3>
                            </div>
                            <div class="row justify-content-between pb-5">
                                <div class="text-dark col-sm-6 ">
                                    <h3 class="badge  w-75 py-2" style="font-size: 25px">Price</h3>
                                </div>
                                <h3 class="col-sm-6 fs-4  " style="text-align: end">
                                    {{$product->price}}
                                    <input type="hidden" name="price" value="{{$product->price}}" />
                                </h3>
                            </div>
                            <div class="row justify-content-between pb-5">
                                <div class="text-dark col-sm-6 ">
                                    <h3 class="badge  py-2 w-75" style="font-size: 25px">Descrirption</h3>
                                </div>
                                <div class="col-sm-6 fs-4" style="text-align: end">
                                    <h3 style="font-size: 25px">
                                        {{ $product->description }}
                                    </h3>
                                </div>
                            </div>

                            <div class="row justify-content-between pb-5 ">
                                <div class="text-dark col-sm-6 ">
                                    <h3 class="badge  w-75 py-2" style="font-size: 25px">Colors</h3>
                                </div>
                                <div class="col-sm-6  product__details__option__color" style="text-align: end">
                                    @foreach ($product_colors as $product_color)
                                    <label class="color-check" style="background-color : {{ $product_color->color }}" for="{{ 'sp-' . $product_color->id }}" color="{{$product_color->id}}">
                                        <input id='color-inp' name="color" type="radio" id="{{ 'sp-' . $product_color->id }}" name="color_id" value="{{$product_color->id}}">
                                    </label>
                                    @endforeach

                                </div>
                            </div>
                            <div class="row justify-content-between pb-5 ">
                                <div class="text-dark col-sm-6 ">
                                    <h3 class="badge  w-75 py-2" style="font-size: 25px">Sizes</h3>
                                </div>
                                <div class="col-sm-6  product__details__option__size" style="text-align: end">
                                    @foreach ($product_sizes as $size)
                                    <label for="{{ $size->size }}" class="size-check" size_id='{{$size->id}}'>{{ $size->size }}
                                        <input type="radio" id="{{ $size->size }}" id="size_id" value="{{ $size->id }}" name="size">
                                    </label>
                                    @endforeach
                                </div>
                            </div>
            </form>

            <style>
                .opacity {
                    opacity: 0.6;
                    transform: scale(1.2, 1.2);
                    transition: ease-in-out 300ms;
                }
            </style>


        </div>
    </div>
    <div class="col-lg-6 align-self-baseline ">
        <img   src='{{ asset('uploads/'. $product->image) }}' alt="" style="width: 100%">
        <div class="product__details__last__option ">
            {{-- <img src="{{asset('uploads/'. $product->image)}}" alt="">--}}
            <div class="product__details__cart__option  ">
                <div class=" " style="text-align: end;">
                    <div class="quantity  ">
                        <div class="pro-qty">
                            <input type="text" value="1" name="quantity">

                        </div>
                    </div>
                    <input type='submit' id="add-cart" class="primary-btn my-4" value="add cart" />
                </div>

                <div class="my-3 " style="font-size: 25px;display : flex ;justify-content: end ;align-items : center">
                    <span class="py-2 px-4" style="color : black ;text-transform: uppercase ; font-weight : 600 ;">
                        Available
                    </span>

                    <div class="badge badge-dark py-2 px-4" id="available-qte">{{$number}}</div>
                </div>


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

@section('scripts')
<script>

    $(document).ready(function(){
        function fetch_colors(item) {

color_check.forEach(row => {
    if (item !== row) {
        row.children[0].removeAttribute('checked')
        row.classList.remove('opacity')
    }

})

}
var color_check = document.querySelectorAll(".color-check");

var prod_id = document.querySelector('#prd_id').getAttribute('prd_id');
if (prod_id) {
function ajax_req(color) {
    var color = color
    if (color != 'all') {
        $.ajax({
            url: '../fetch-color/' + prod_id + '/' + color,
            dataType: 'json',
            success: function(data) {
                var current_labels = $('.product__details__option__size label');
                var size_checks = $('.size-check');
                $.each(size_checks, (key, value) => {
                    $(value).removeClass('active')
                })
                $.each(current_labels, (key, value) => {
                    $(value).addClass('d-none')
                })

                $.each(current_labels, (key, value) => {

                    $.each(data.sizes, (key, j) => {
                        if (j.id == $(value).attr('size_id')) {
                            $(value).removeClass('d-none')
                        }
                    })
                })
                $('#available-qte').empty().html(data.availability)

            },
            error: function(err) {
                console.log(err)
            }
        })
    } else {
        $.ajax({
            url: '../all-sizes' + '/' + prod_id,
            dataType: 'json',
            success: function(data) {
                var size_checks = $('.size-check');
                $.each(size_checks, (key, value) => {
                    $(value).removeClass('active')
                })
                $('#available-qte').empty().html(data.availability)
                var current_labels = $('.product__details__option__size label');
                $.each(current_labels, (key, value) => {
                    $(value).removeClass('d-none')
                })
            },
            error: function(err) {
                console.log(err)
            }
        })
    }


}


color_check.forEach(item => {

    item.addEventListener('click', function() {
        var color = null
        var filter = false
        if (item.children[0].hasAttribute('checked')) {
            ajax_req('all')
            item.classList.remove('opacity');
            item.children[0].removeAttribute('checked')
            filter = true
        } else {
            var color = item.getAttribute('color')
            item.classList.add('opacity')
            item.children[0].setAttribute('checked', '')
            ajax_req(color)
        }
        if (filter == false) {
            fetch_colors(item)
        }
    })


})



}
    })
</script>

@endsection

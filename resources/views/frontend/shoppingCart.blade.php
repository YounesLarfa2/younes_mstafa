@extends('frontend.app')
@section('title')
shoppin cart
@endsection
@section('content')
<!--header -->
<x-header :categoriers="$categoriers" :count="$count"></x-header>

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
<style>

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert {background-color: black;}
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
</style>
  <div class="container">
    @if(Session::has('alert'))
<div class="alert success bg-dark text-white">
    <span class="closebtn">&times;</span>
    <strong>Hey wait!</strong> {{Session::get('alert')}}
  </div>
@endif
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="shopping__cart__table">

                    <table>
                        <thead>
                            <tr>

                            </tr>
                        </thead>
                        @auth
                        <tbody>

                            @if(count($carts) > 0)
                            @foreach($carts as $row)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{ asset('frontend/img/product/product-2.jpg') }}" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{$row['name']}} hhh</h6>
                                        <h5>{{$row['total']}} hh</h5>
                                    </div>
                                </td>
                                <td class="px-3">
                                    <div style="width: 20px;height:20px;background :{{$row->product_color_size->product_color->color}}"></div>
                                </td>
                                <td class="px-3 ">
                                    <span class="fs-2">{{$row->product_color_size->product_size->size}}</span>

                                </td>
                                <form method="POST" action="{{route('update_cart')}}">
                                    @csrf
                                    <td class="quantity__item px-4">
                                        <div class="quantity">
                                            <div class="d-flex">
                                                <input type="number" class='w-50' value="{{$row['quantity']}}" id="update-cart" name="qte">
                                                <input type="hidden" class='w-50' value="{{$row['id']}}" id="update-cart" name="id">
                                                <button type="submit" class="btn btn-dark w-50 rounded-0">New</button>
                                            </div>
                                        </div>
                                    </td>
                                </form>

                                <td class="cart__price">{{$row['total'] * $row['quantity']}}$</td>
                                <td class="cart__close">
                                    <form action="{{url('/destroy_cart',$row['id'])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                            @else
                            <tr>
                                <td rowspan="4" class="text-center fs-2 text-decoration-underline">Cart is empty go buy <a style=" line-height: 2px!important;" class="text-danger  " href="{{url('/shop')}}">go to shop</a></td>
                            </tr>
                            @endif
                        </tbody>
                        @else
                        <tbody>

                            @if(session('cart') !== null && count(session('cart'))  != 0 )

                            @foreach(session('cart') as $row)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{ asset('frontend/img/product/product-2.jpg') }}" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{$row['name']}} hhh</h6>
                                        <h5>{{$row['total']}} hh</h5>
                                    </div>
                                </td>
                                <td class="px-3">
                                    <div style="width: 20px;height:20px;background-color : {{$row['color']}}"></div>
                                </td>
                                <td class="px-3 ">
                                    <span class="fs-2">{{$row['size']}}</span>

                                </td>
                                <form method="POST" action="{{route('update_cart')}}">
                                @csrf
                                <td class="quantity__item px-4">
                                    <div class="quantity">
                                        <div class="d-flex">
                                            <input type="number" class='w-50' value="{{$row['quantity']}}" id="update-cart" name="qte" >
                                            <input type="hidden" class='w-50' value="{{ array_search($row, session('cart')) }}" id="update-cart" name="id" >
                                            <button type="submit" class="btn btn-dark w-50 rounded-0" >New</button>
                                        </div>
                                    </div>
                                </td>
                                </form>

                                <td class="cart__price">{{$row['total'] * $row['quantity']}}$</td>
                                <td class="cart__close">
                                <form action="{{url('/destroy_cart',array_search($row, session('cart')))}}" method="POST">
                                    @csrf
                                    @method('delete')
                                <button type="submit">
                                    <i class="fa fa-close"></i>
                                </button>
                                </form>

                                </td>
                            </tr>
                            @endforeach

                            @else
                            <tr>
                                <td rowspan="4" class="text-center fs-2 text-decoration-underline">Cart is empty go buy <a style=" line-height: 2px!important;" class="text-danger  " href="{{url('/shop')}}">go to shop</a></td>
                            </tr>
                            @endif

                        </tbody>
                        @endauth

                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total <span>
                                @if(isset($total) )
                                {{$total}}$

                                @else
                                0
                                @endif
                            </span></li>
                        <li>Shipping <span>free</span></li>
                        <li>Payment Method <span> Cash on delivery</span></li>
                    </ul>
                    <a href="{{url('/checkout')}}" class="primary-btn" style="background:#8eabff;">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>

    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
      }
    }
  </script>
@endsection
<!-- Shopping Cart Section End -->
@endsection

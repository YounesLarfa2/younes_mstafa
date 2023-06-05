@extends('frontend.app')
@section('title')
    check out
@endsection

@section('content')
    <!--header -->
    <!-- Breadcrumb Section Begin -->
    <x-header :categoriers="$categoriers" :count="$count"></x-header>



    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{route('checkout')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                        @if(isset($user_has_order))

                        <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        <input type="text" value="{{auth()->user()->name}}" name="name" >
                                    </div>
                                </div>
                                
                            </div>

                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" value="{{$user_has_order->address}}" name="address" >
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" value="{{$user_has_order->city}}" name="city">
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" value="{{$user_has_order->phone}}" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" value="{{auth()->user()->email}}">
                                    </div>
                                </div>
                            </div>

                        @else
                        <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Name<span>*</span></p>
                                        <input type="text" value="">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" value="" name="address">
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" value="" name="city">
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" value="" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" value="" name="email">
                                    </div>
                                </div>
                            </div>

                        @endif
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    @foreach ($number_quantity as $key => $one)
                                    <li>{{$key + 1}}- {{$one->product_color_size->product_color->product->name}} <span>${{$one['total'] * $one['quantity']}}</span></li>

                                    @endforeach

                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span>
                                    ${{$total}}
                                    <input type="hidden" name="total" value={{$total}} name="total"/>
                                    </span></li>
                                </ul>

                              
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                    Free shippment
                                    <input type="checkbox" id="payment" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Cash on delivery 
                                        <input type="checkbox" id="paypal" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection

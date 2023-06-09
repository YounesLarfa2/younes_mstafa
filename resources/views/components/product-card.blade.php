@props(['product'])
<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
    <div class="product__item border p-2">
        <a href="{{ route('frontend.shop_details',$product->id) }}" class="product__item__text2">
            <img class='product__item__pic set-bg' src='{{ asset('uploads/'. $product->image) }}' />
        </a>
        <div class="product__item__text text-center">
            <h6>{{ $product->name }}</h6>
            <h5>{{ $product->price }} $</h5>
        </div>
    </div>
</div>

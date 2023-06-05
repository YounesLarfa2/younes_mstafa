@props(['RelatedProduct'])
<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
    <div class="product__item border p-2">
        <a href="{{ route('frontend.shop_details',$RelatedProduct->id) }}" class="product__item__text2">
            <div class="product__item__pic set-bg" data-setbg="{{ asset('hero/hero-2.jpg') }}">        </div>

        </a>
        <div class="product__item__text text-center">
            <h6>{{ $RelatedProduct->name }}</h6>
            <h5>{{ $RelatedProduct->price }} DH</h5>
        </div>
    </div>
</div>


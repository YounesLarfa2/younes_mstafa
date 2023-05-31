@props(['newProduct'])
<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="{{ asset('uploads/' . $newProduct->image) }}">

        </div>
        <div class="product__item__text">
            <h6>{{ $newProduct->name }}</h6>
            <a href="{{ route('frontend.shop_details', $newProduct->id) }}" class="add-cart">
                See details
            </a>
            <h5>{{ $newProduct->price }} DH</h5>

        </div>
    </div>
</div>

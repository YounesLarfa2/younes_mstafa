@props(['product'])
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="{{ url('frontend/img/product/' . $product->image) }}">
        </div>
        <div class="product__item__text">
            <h6>{{ $product->name }}</h6>
            <a href="{{ route('frontend.shop_details', $product->id) }}" class="add-cart">show details</a>
            <div class="rating">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <h5>{{ $product->price }} DH</h5>
            <div class="product__color__select">
                <label for="pc-37">
                    <input type="radio" id="pc-37">
                </label>
                <label class="active black" for="pc-38">
                    <input type="radio" id="pc-38">
                </label>
                <label class="grey" for="pc-39">
                    <input type="radio" id="pc-39">
                </label>
            </div>
        </div>
    </div>
</div>

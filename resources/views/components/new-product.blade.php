@props(['newProduct'])
<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/' . $newProduct->image) }}">

        </div>
        <div class="product__item__text">
            <h6>{{ $newProduct->name }}</h6>
            <a href="{{ route('frontend.shop_details', $newProduct->id) }}" class="add-cart">show details</a>
            <div class="rating">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <h5>{{ $newProduct->price }} DH</h5>
            <div class="product__color__select">
                <label for="pc-19">
                    <input type="radio" id="pc-19">
                </label>
                <label class="active black" for="pc-20">
                    <input type="radio" id="pc-20">
                </label>
                <label class="grey" for="pc-21">
                    <input type="radio" id="pc-21">
                </label>
            </div>
        </div>
    </div>
</div>

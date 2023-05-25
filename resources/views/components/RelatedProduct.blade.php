@props(['RelatedProduct'])
<div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/' . $RelatedProduct->image) }}">

        </div>
        <div class="product__item__text">
            <h6>{{ $RelatedProduct->name }}</h6>
            <a href="{{ route('frontend.shop_details', $RelatedProduct->id) }}" class="add-cart">show details</a>
            <div class="rating">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <h5>{{ $RelatedProduct->price }} DH </h5>
            <div class="product__color__select">
                <label for="pc-10">
                    <input type="radio" id="pc-10">
                </label>
                <label class="active black" for="pc-11">
                    <input type="radio" id="pc-11">
                </label>
                <label class="grey" for="pc-12">
                    <input type="radio" id="pc-12">
                </label>
            </div>
        </div>
    </div>
</div>

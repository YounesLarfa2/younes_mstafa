@extends('frontend.app')
@section('title')
    categorier
@endsection

@section('content')

    <!--header -->
    <x-header :categoriers="$categoriers" :count="$count"></x-header>
    <!-- Breadcrumb Section End -->
    <div class="categorie-line"><span style="font-weight: 700">{{ $categorie->name }}</span></div>
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    <div class="shop__sidebar">



                        <form action="{{ route('filter.category', $categorie->id) }}" method="get">

                            <div class="shop__sidebar__accordion">
                                <div class="accordion" id="accordionExample">

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                        </div>
                                        <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="shop__sidebar__size">
                                                    @foreach ($product_sizes as $key => $product_sizes)
                                                        <label for="{{ $key }}">{{ $key }}
                                                            <input type="radio" id="{{ $key }}" name="size"
                                                                value="{{ $key }}">
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                        </div>
                                        <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="shop__sidebar__color">
                                                    @foreach ($product_colors as $key => $product_color)
                                                        <label style="background: {{ $key }}"
                                                            for="{{ $key }}">
                                                            <input type="radio" id="{{ $key }}" name="color"
                                                                value="{{ $key }}">
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading text-start">
                                            <input type="submit" value="Filter" class="btn btn-info w-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if (count($products) != 0)
                            @foreach ($products as $product)
                                <x-product-card :product="$product"></x-product-card>
                            @endforeach
                        @else
                            <h2 class="no-product">There is no product at this time</h2>
                        @endif
                    </div>
                    <div class="custom-pagination">
                        {{-- {{ $products->links() }} --}}
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Shop Section End -->
@endsection

@extends('admin2.app')
@section('content')


<h1>Product name : {{ $product->name}}</h1>
<h1>Category : {{$product->category->name}}</h1>
<h1>Description : {{$product->description}}</h1>
<h1>Price : {{$product->price}} euro</h1>
<h1>Discount : {{$product->discount}} euro</h1>
<h1><img src="{{asset('uploads/' . $product->image)}}" /></h1>
<ul>
    @foreach ($product_colors as $color)
        <li style="color : {{$color->color}}">{{$color->color}}</li>
    @endforeach
</ul>
<hr />

<ul>
    @foreach ($product_sizes as $size )
        <li>{{$size->size}}</li>
    @endforeach
</ul>
<hr />
<ul>
    @foreach ($product_sizes_colors as $product_color_size )
        <li>{{$product_color_size->product_color->color}}</li>
        <li>{{$product_color_size->product_size->size}}</li>
        <li>{{$product_color_size->quantity}}</li>
        <li>{{$product_color_size->price}}</li>
        <br/>
    @endforeach
</ul>
@endsection
@extends('admin2.app')
@section('content')


<h1>Order Date : {{ date('Y-m-d', strtotime('$order->created_at')) . '-'. date('l', strtotime('$order->created_at'))}}</h1>
<h1>User Order : {{$order->full_name}}</h1>
<h1>Total Price : {{$order->total_price }}</h1>
<h1>address : {{$order->address }}</h1>
<h1>city : {{$order->city }}</h1>
<h1>address : {{$order->total_price }}</h1>
<h1>phone : {{$order->phone }}</h1>
<ul>
    @foreach ($order_details as $row)
        <li>
            {{ $row->product_colors_size->product_color->color }}
        </li>
        <li>
            {{ $row->product_colors_size->product_size->size }}
        </li>

        <li>
            {{ $row->quantity }}
        </li>
        <li>
            {{ $row->price }}
        </li>
        <hr />
    @endforeach
</ul>


</ul>
@endsection
@extends('admin2.app')

@section('content')
<div class="pagetitle">
    <h1>Orders</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item">Orders</li>
            <li class="breadcrumb-item active">Display Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Order </th>
                                <th scope="col">Status </th>
                                <th scope="col">User</th>
                                <th scope="col">Total</th>
                                <th>Date Creation</th>
                                <th>
                                <div class="text-center">
                                Actions
                                </div>    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)

                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>
                                    <select class="form-control">
                                        <option value="{{$order->status}}" {{ ( $order->status == 'pending') ?'selected' : ''}} >
                                            Pending
                                        </option>
                                        <option value="{{$order->status}}" {{ ( $order->status == 'Processing') ?'selected' : ''}} >
                                            Processing
                                        </option>
                                        <option value="{{$order->status}}" {{ ( $order->status == 'Canceled') ?'selected' : ''}} >
                                            Canceled
                                        </option>
                                        <option value="{{$order->status}}" {{ ( $order->status == 'Delivered') ?'selected' : ''}} >
                                            Delivered
                                        </option>
                                    </select>
                                </td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>{{ date('Y-m-d', strtotime('$order->created_at')) . '-'. date('l', strtotime('$order->created_at'))}}
</td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-content-around">
                                        <a href="{{route('admin.orders.show',$order->id)}}" class="view  hover-effect px-2  ">
                                            <i class="bi bi-eye text-primary fs-3 "></i></a>


                                        <form action="{{route('admin.orders.destroy',$order->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a type='submit' class=" remove hover-effect px-2" onclick="this.parentNode.submit()   ">
                                                <i class="bi bi-trash-fill text-danger fs-3"></i></button>
                                        </form>

                                    </ul>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
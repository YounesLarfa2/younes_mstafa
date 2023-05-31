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
                                <th scope="col">Date </th>
                                <th scope="col">Status</th>
                                <th scope="col">Total</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
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
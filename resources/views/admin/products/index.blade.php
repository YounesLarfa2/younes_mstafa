@extends('admin.app')

@section('content')

<div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                Products List

                                <a href="{{route('admin.products.create')}}" class="text-end btn btn-success">Create New</a>
                            </div>
                            <div class="card-body">

                                <div class="userDatatable global-shadow border-0 bg-white w-100">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <div class="d-flex align-items-center">
                                                            <div class="custom-checkbox  check-all">
                                                                <input class="checkbox" type="checkbox" id="check-3">
                                                                <label for="check-3">
                                                                    <span class="checkbox-text userDatatable-title">Name</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Price</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Discount Price</span>
                                                    </th>

                                                    <th>
                                                        <span class="userDatatable-title">date Creation</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">status</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $product)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-12">
                                                                            <label for="check-grp-12"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style='background-image:url("../uploads/{{$product->image}}"); background-size: cover;'></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    {{$product->category_id}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                             {{$product->price}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            @if($product->discount_price != null)
                                                                <span class="text-danger">no yet</span>
                                                            @else
                                                            {{$product->discount_price}}
                                                            @endif
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ date('l', strtotime( $product->created_at) ) }}, {{ date('y-m-d',strtotime( $product->created_at)) }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">in stock</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <span data-feather="eye"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <span data-feather="edit"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <span data-feather="trash-2"></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection
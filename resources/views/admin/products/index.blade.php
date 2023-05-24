@extends('admin.app')

@section('content')

<div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                User List

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
                                                                    <span class="checkbox-text userDatatable-title">user</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">emaill</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">company</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">position</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">join date</span>
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
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm6.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-13">
                                                                            <label for="check-grp-13"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm1.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivete</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-14">
                                                                            <label for="check-grp-14"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm2.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">blocked</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-4">
                                                                            <label for="check-grp-4"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm3.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-5">
                                                                            <label for="check-grp-5"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm4.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-6">
                                                                            <label for="check-grp-6"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm5.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-7">
                                                                            <label for="check-grp-7"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm6.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-8">
                                                                            <label for="check-grp-8"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm1.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-9">
                                                                            <label for="check-grp-9"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm2.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-10">
                                                                            <label for="check-grp-10"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm3.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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


                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <div class="checkbox-group-wrapper">
                                                                    <div class="checkbox-group d-flex">
                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                            <input class="checkbox" type="checkbox" id="check-grp-11">
                                                                            <label for="check-grp-11"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm4.png'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                                <p class="d-block mb-0">
                                                                    San Francisco, CA
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            john-keller@gmail.com
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
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

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection
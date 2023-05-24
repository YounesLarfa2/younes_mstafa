@extends('admin.app')

@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="contact-breadcrumb">

                            <div class="breadcrumb-main add-contact justify-content-sm-between ">
                                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                    <div class="d-flex align-items-center add-contact__title justify-content-center mr-sm-25">
                                        <h4 class="text-capitalize fw-500 breadcrumb-title">Data List</h4>
                                        <span class="sub-title ml-sm-25 pl-sm-25"></span>
                                    </div>
                                    <div class="action-btn mt-sm-0 mt-15">
                                        <a href="firestore-add.html" class="btn px-20 btn-primary ">
                                            <i class="las la-plus fs-16"></i>Add New
                                        </a>
                                    </div>
                                </div>
                                <div class="breadcrumb-main__wrapper">

                                    <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                                        <span data-feather="search"></span>
                                        <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                    </form>

                                </div>
                            </div>

                        </div>
                        <!-- ends: contact-breadcrumb -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                User List
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

                                <div class="d-flex justify-content-sm-end justify-content-start pt-25">

                                    <nav class="atbd-page ">
                                        <ul class="atbd-pagination d-flex">
                                            <li class="atbd-pagination__item">
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                                <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                                <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                                <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                                <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                                <a href="#" class="atbd-pagination__option">
                                                </a>
                                            </li>
                                            <li class="atbd-pagination__item">
                                                <div class="paging-option">
                                                    <select name="page-number" class="page-selection">
                                                        <option value="20">20/page</option>
                                                        <option value="40">40/page</option>
                                                        <option value="60">60/page</option>
                                                    </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
@extends('admin.app')

@section('content')
<div class="row">

    <div class="col-lg-12">
        <div class="d-flex align-items-center user-member__title mb-30 mt-30">
            <h4 class="text-capitalize">add category</h4>
        </div>
    </div>
</div>

<div class="card mb-50">
    <div class="row justify-content-center">
        <div class="col-sm-5 col-10">
            <div class="mt-40 mb-50">
                <div class="account-profile d-flex align-items-center mb-4 ">
                    <div class="ap-img pro_img_wrapper">
                        <input id="file-upload" type="file" name="fileUpload" class="d-none">
                        <!-- Profile picture image-->
                        <label for="file-upload">
                            <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="{{asset('admin/img/author/profile.png')}}" alt="profile">
                            <span class="cross" id="remove_pro_pic">
                                <span data-feather="camera"></span>
                            </span>
                        </label>
                    </div>
                    <div class="account-profile__title">
                        <h6 class="fs-15 ml-20 fw-500 text-capitalize">category image</h6>
                    </div>
                </div>
                <div class="edit-profile__body">
                    <form>
                        
                        <div class="form-group mb-25">
                            <label for="name1">name</label>
                            <input type="text" class="form-control" id="name1" placeholder="Duran Clayton">
                        </div>


                        <div class="form-group mb-25">
                            <div class="countryOption">
                                <label for="countryOption">
                                    country
                                </label>
                                <select class="js-example-basic-single js-states form-control" id="countryOption">
                                    <option value="JAN">event</option>
                                    <option value="FBR">Venues</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group mb-25 status-radio">
                            <label class="mb-15" for="phoneNumber2">category or sub category ?</label>
                            <div class="d-flex">
                                <div class="radio-horizontal-list d-flex flex-wrap">


                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl1">
                                        <label for="radio-hl1">
                                            <span class="radio-text">category</span>
                                        </label>
                                    </div>




                                    <div class="radio-theme-default custom-radio ">
                                        <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl2">
                                        <label for="radio-hl2">
                                            <span class="radio-text">subcategory</span>
                                        </label>
                                    </div>







                                </div>
                            </div>
                        </div>

                        <div class="button-group d-flex pt-25 justify-content-end">
                            <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@extends('admin.app')

@section('content')
<style>
    .container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
    }


    .color-box {
        width: 25px;
        height: 25px;
        border-radius: 5px;
        border: 0.5px solid black;
    }

    .red {
        background-color: red;
    }

    .green {
        background-color: green;
    }

    .blue {
        background-color: blue;
    }

    .yellow {
        background-color: yellow;
    }

    .orange {
        background-color: orange;
    }

    .purple {
        background-color: purple;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 5px;
    }

    .checkbox-input {
        margin-right: 5px;
        transform: scale(1.5);
    }
</style>
<div class="container-fluid">
    <div class="row">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-xl-12 col-md-7 col-lg-12  w-100">
            <div class="mx-sm-30 mx-20 ">
                <!-- Start: card -->
                <div class="card add-product  p-sm-30 p-20 mb-30">
                    <div class="card-body p-0">
                        <div class="card-header">
                            <h6 class="fw-500">Add Product</h6>
                        </div>
                        <!-- Start: card body -->
                        <div class="add-product__body px-sm-40 px-20">
                            <!-- Start: form -->
                            <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- form group Name-->
                                <div class="form-group">
                                    <label for="name1">product name</label>
                                    <input type="text" class="form-control" id="name1" placeholder="red chair" name="name">
                                </div>

                                <!-- form group 2 Category-->
                                <div class="form-group">
                                    <div class="countryOption">
                                        <label for="countryOption">
                                            category
                                        </label>
                                        <select class="js-example-basic-single js-states form-control" id="countryOption" name="category_name">
                                            <option value="JAN">event</option>
                                            <option value="FBR">Venues</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- form group 3 Price-->
                                <div class="form-group quantity-appearance">
                                    <label>price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <span data-feather="dollar-sign"></span></span>
                                        </div>
                                        <div class="pt_Quantity">
                                            <input type="number" class="form-control" min="0" max="100" step="1" value="0" data-inc="1" name="price">
                                        </div>
                                    </div>
                                </div>

                                <!-- form group 4 Discount-->
                                <div class="form-group quantity-appearance">
                                    <div class="card card-default card-md mb-4">
                                        <div class="card-header py-20">
                                            <h6>Discounted Price</h6>
                                        </div>
                                        <div class="card-body pt-sm-20 pt-3 ">
                                            <div class="checkbox-theme-default custom-checkbox pb-3">
                                                <input class="checkbox" type="checkbox" id="check-1">
                                                <label for="check-1">
                                                    <span class="checkbox-text">
                                                        I dont want discount

                                                    </span>
                                                </label>
                                            </div>
                                            <div class="input-group" id="input-discounted">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <span data-feather="percent"></span></span>
                                                </div>
                                                <div class="pt_Quantity">
                                                    <input id='discounted-input' type="number" class="form-control w-25" min="0" max="100" step="1" value="" data-inc="1" name="discount_price">
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <!-- form group 5 Description-->
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="loram ipsum dolor sit amit" name="description"></textarea>
                                    </div>

                                    <!-- form group 6 Image-->
                                    <div class="card add-product p-sm-30 p-20 my-3 ">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">Product image</h6>
                                            </div>
                                            <!-- Start: product body -->
                                            <div class="add-product__body-img px-sm-40 px-20">
                                                <label for="upload" class="file-upload__label">
                                                    <span id='uploader' class="upload-product-img px-10 d-block">
                                                        <span class="file-upload">
                                                            <span data-feather="upload"></span>
                                                            <input id="upload" class="file-upload__input" type="file" name="image">
                                                        </span>
                                                        <span class="pera">Drag and drop an image</span>
                                                        <span>or <a href="#" class="color-secondary">Browse</a> to choose a
                                                            file</span>


                                                    </span>
                                                    <span id='uploader-img' class="upload-product-img px-10 d-none">
                                                        <img id='imgpreview' style='width:400px;height:300px;background-size: cover' src="" />
                                                    </span>

                                                </label>

                                            </div>

                                            <!-- End: product body -->
                                        </div>
                                    </div>

                                    <div class="card mb-3`">
                                        <div class="card-body ">
                                                                                <!-- form group 7 color picker-->
                                    <div class="form-group py-1">
                                        <label for="exampleFormControlTextarea1 ">Color Picker</label>
                                        <div class="container ">
                                            <div class="color-box red"></div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="color-pick">

                                            </label>
                                            <div class="color-box green"></div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="color-pick">

                                            </label>
                                            <div class="color-box blue"></div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="color-pick">

                                            </label>
                                            <div class="color-box yellow"></div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="color-pick">
                                            </label>
                                            <div class="color-box orange"></div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="color-pick">

                                            </label>
                                            <div class="color-box purple"></div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="color-pick">
                                            </label>

                                        </div>
                                    </div>
                                    <!-- form group 7 color picker-->
                                    <div class="form-group ">
                                        <label for="exampleFormControlTextarea1 ">Other color</label>
                                        <div class="container py-2">
                                            <input class="color-box" type="color" id="color" name="color" value="#" style="width : 30px;border : none">                                            <label class="checkbox-label">
                                            <input type="radio" class="checkbox-input" name="color-pick">
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="card ">
                                        <div class="card-body py-0">
                                                                                <!-- form group 7 size picker-->
                                    <div class="form-group py-3">
                                        <label for="exampleFormControlTextarea1 ">Size Picker</label>
                                        <div class="container py-2">
                                            <div>Small</div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="size-pick">

                                            </label>
                                            <div>Medium</div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="size-pick">

                                            </label>
                                            <div>Large</div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="size-pick">

                                            </label>
                                            <div>X-Large</div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="size-pick">
                                            </label>
                                            <div>XX-Large</div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="size-pick">

                                            </label>
                                            <div>3X-Large</div>
                                            <label class="checkbox-label">
                                                <input type="radio" class="checkbox-input" name="size-pick">
                                            </label>

                                        </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div id='costum-div' class="div d-none justify-content-around align-items-center  my-3">
                                        <label id="price" class="text-black-50 px-3">price</label>
                                        <div class="pt_Quantity ">
                                            <input type="number" class="form-control w-50" min="0" max="100" step="1" value="0" data-inc="1" name="price">
                                        </div>

                                        <label id="price" class="text-black-50 px-3">discounted </label>

                                        <div class="pt_Quantity ">
                                            <input type="number" class="form-control w-50" min="0" max="100" step="1" value="0" data-inc="1" name="price">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <span data-feather="percent"></span></span>
                                            </div>
                                        </div>

                                        <div>
                                            <button id="costum-product" class="btn btn-primary  btn-squared text-capitalize btn-success my-3 ">Custom Product
                                            </button>
                                        </div>

                                    </div>
                                    
                                    <!-- form group 4 Discount-->
                                    <div class="form-group quantity-appearance">
                                        <div class="card">
                                            <div class="card-header color-dark fw-500">
                                                Product Details
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="table4  p-25 bg-white mb-30">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <input type="color" width="25px" />
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <!-- submit -->
                                    <button class="btn btn-primary btn-default btn-squared text-capitalize">save product
                                    </button>

                            </form>
                            <!-- End: form -->
                        </div>
                        <!-- End: card body -->
                    </div>
                </div>

            </div>
        </div>
        <!-- ends: col-lg-8 -->
    </div>

</div>

<script>
    const size_pick = document.getElementsByName('size-pick');
    const color_pick = document.getElementsByName('color-pick');
    const custom_product = document.getElementById('costum-product');
    var delete_costum_product = document.querySelectorAll('.delete-costum-product');

    delete_costum_product.forEach(item => {
        item.addEventListener('click', (event) => {
            item.parentElement.parentElement.remove(item.parentElement.parentElement)
            delete_costum_product = document.querySelectorAll('.delete-costum-product');
        })


    })
    color_pick.forEach(item => {
        if (item.checked) {
            size_pick.forEach(item => {

                if (item.checked) {
                    document.getElementById('costum-div').classList.remove('d-none')
                    document.getElementById('costum-div').classList.add('d-flex')
                }
            })


        }
        item.addEventListener('change', (event) => {
            if (item.checked) {
                size_pick.forEach(item => {
                    if (item.checked) {
                        document.getElementById('costum-div').classList.remove('d-none')
                        document.getElementById('costum-div').classList.add('d-flex')
                    }
                })
            }
        })
    });
    size_pick.forEach(item => {

        item.addEventListener('change', (event) => {
            if (item.checked) {
                color_pick.forEach(item => {
                    if (item.checked) {
                        document.getElementById('costum-div').classList.remove('d-none')
                        document.getElementById('costum-div').classList.add('d-flex')
                    }
                })
            }
        })
    });
    custom_product.addEventListener('click', (event) => {
        event.preventDefault()
        const tbody = document.querySelector('tbody');
        if (tbody.children.length > 10) {
            alert('you can not depass 10 products !')
        } else {
            tbody.innerHTML += `
            <tr>
                                                                    <td>
                                                                        <div class="userDatatable-content">
                                                                            Mike
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="userDatatable-content">
                                                                            Mike
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="userDatatable-content">
                                                                            Mike
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="userDatatable-content">
                                                                            32
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="userDatatable-content">
                                                                            10 Downing Street
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div style='cursor:pointer' class="delete-costum-product userDatatable-content text-center">
                                                                            <i class="fa fa-trash text-danger"></i>
                                                                        </div>
                                                                    </td>
                </tr>    
            
            `
            delete_costum_product = document.querySelectorAll('.delete-costum-product');
            delete_costum_product.forEach(item => {
                item.addEventListener('click', (event) => {
                    item.parentElement.parentElement.remove(item.parentElement.parentElement)
                    delete_costum_product = document.querySelectorAll('.delete-costum-product');
                })

            })
        }

    })



    const discount_check = document.getElementById('check-1');
    discount_check.addEventListener('change', (event) => {
        if (discount_check.checked) {
            document.getElementById('input-discounted').classList.add('d-none')
            document.getElementById('discounted-input').value = null
        } else {
            document.getElementById('input-discounted').classList.remove('d-none')
        }

    })
    const fileInput = document.getElementById('upload');
    const imagePreview = document.getElementById('imgpreview');

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        const reader = new FileReader();

        let image_src = imagePreview.getAttribute('src');
        if (image_src != '') {
            reader.readAsDataURL(file);
            reader.addEventListener('load', (event) => {
                imagePreview.src = event.target.result;
            });
            console.log('3amr')

        } else {
            console.log('khawi')

            const uploader = document.getElementById('uploader')
            const uploader_img = document.getElementById('uploader-img')
            uploader.classList.remove('d-block')
            uploader.classList.add("d-none");
            uploader_img.classList.remove('d-none')
            uploader_img.classList.add('d-block')

            reader.readAsDataURL(file);
            reader.addEventListener('load', (event) => {
                    imagePreview.src = event.target.result;
                }

            )

        }


    });
</script>
@endsection
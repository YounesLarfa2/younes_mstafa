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

    .images-preview-div img {
        padding: 10px;
        max-width: 100px;
    }
</style>
<div class="container-fluid " style="margin-right: 0px;margin-top : 100px  ">
    <div class="row">

        <div class="col-xl-12 col-md-12 col-lg-12  w-100">

            <div class="mx-sm-30 mx-20 ">

                <!-- Start: card -->
                <div class="card add-product  p-sm-30 p-20 mb-30">
                    <div class="card-body p-0">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger w-100 m-auto ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="card-header">
                            <h6 class="fw-500">Add Product</h6>
                        </div>
                        <!-- Start: card body -->
                        <div class="add-product__body px-sm-40 px-20">
                            <!-- Start: form -->
                            <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- form group : name-->
                                <div class="form-group">
                                    <label for="name1">product name</label>
                                    <input type="text" class="form-control" id="name1" placeholder="red chair" name="name">
                                </div>

                                <!-- form group : category_name -->
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

                                <!-- form group : price-->
                                <div class="form-group quantity-appearance">
                                    <label>price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <span data-feather="dollar-sign"></span></span>
                                        </div>
                                        <div class="pt_Quantity">
                                            <input type="number" class="form-control" min="0" step="1" value="0" data-inc="1" name="price">
                                        </div>
                                    </div>
                                </div>

                                <!-- form group : discount-->
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
                                                    <input id='discounted-input' type="number" class="form-control w-25" min="0" max="100" step="1" value="" data-inc="1" name="discount">
                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                    <!-- form group : description-->
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="description about the product" name="description"></textarea>
                                    </div>


                                    <!-- form group : image-->
                                    <div class="card add-product p-sm-30 p-20 my-3 ">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500"  style="color:#6610f2">Main image</h6>
                                            </div>
                                            <!-- Start: product body -->
                                            <div class="add-product__body-img px-sm-40 px-20">
                                                <label for="upload" class="file-upload__label">
                                                    <span id='uploader' class=" px-10 d-block">
                                                        <span class="file-upload">
                                                            <span data-feather="upload"></span>
                                                            <input id="upload" class="file-upload__input" type="file" name="image">
                                                        </span>
                                                        <span class="pera" >Import your image</span>

                                                    </span>
                                                    <span id='uploader-img' style="height:250px;box-sizing : unset" class="upload-product-img  d-none">
                                                        <img id='imgpreview' src="" style="height: 100%;object-fit: contain;max-width: 90%" />
                                                    </span>

                                                </label>


                                            </div>


                                            <!-- form group : color-picker -->
                                            <div class="card mb-3 my-4">
                                                <div class="card-header">
                                                <h6 class="fw-500" style="color:#6610f2">Product Attribute</h6>

                                                    </div>
                                                <div class="card-body ">
                                                    <!-- form group : color picker-->
                                                    <div class="form-group py-1">
                                                        <label for="exampleFormControlTextarea1 ">Color Picker</label>
                                                        <div class="container ">
                                                            <div class="color-box red"></div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" value="red" class="checkbox-input color-pick" name="color-pick" checked>

                                                            </label>
                                                            <div class="color-box green"></div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" value="green" class="checkbox-input color-pick" name="color-pick">

                                                            </label>
                                                            <div class="color-box blue"></div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" value="blue" class="checkbox-input color-pick" name="color-pick">

                                                            </label>
                                                            <div class="color-box yellow"></div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" value="yellow" class="checkbox-input color-pick" name="color-pick">
                                                            </label>
                                                            <div class="color-box orange"></div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" value="orange" class="checkbox-input color-pick" name="color-pick">

                                                            </label>
                                                            <div class="color-box purple"></div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" value="purple" class="checkbox-input color-pick" name="color-pick">
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <!-- form group : other color-->
                                                    <div class="form-group ">
                                                        <label for="exampleFormControlTextarea1 ">Other color</label>
                                                        <div class="container py-2">
                                                            <input class="color-box" type="color" id="other-color" name="color-pick" style="width : 30px;border : none"> <label class="checkbox-label">
                                                                <input type="radio" value="custom" class="checkbox-input  color-pick" name="color-pick">
                                                        </div>
                                                    </div>
                                                    <div style="box-shadow : solid black 0.5px 0.5px;"></div>
                                                    <!-- form group 7 size picker-->
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1 ">Size Picker</label>
                                                        <div class="container py-2">
                                                            <div>Small</div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" class="checkbox-input size-pick" value="Small" name="size-pick" checked>

                                                            </label>
                                                            <div>Medium</div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" class="checkbox-input size-pick" value="Medium" name="size-pick">

                                                            </label>
                                                            <div>Large</div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" class="checkbox-input size-pick" value="Large" name="size-pick">

                                                            </label>
                                                            <div>X-Large</div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" class="checkbox-input size-pick" value="X-Large" name="size-pick">
                                                            </label>
                                                            <div>XX-Large</div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" class="checkbox-input size-pick" value="XX-Large" name="size-pick">

                                                            </label>
                                                            <div>3X-Large</div>
                                                            <label class="checkbox-label">
                                                                <input type="radio" class="checkbox-input size-pick" value="3X-Large" name="size-pick">
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- form group : row-add -->
                                            <div class="div py-4">
                                                <div id='costum-div' class="d-none row justify-content-around align-items-center  my-3">
                                                    <div class="col col-12 col-md-4 py-2 ">
                                                        <div class="pt_Quantity ">
                                                            <label id="price" class="text-black-50 px-3 d-flex align-items-center">price</label>

                                                            <input type="number" id='price-row' value='' class="form-control w-100" min="0" step="1" value="10" data-inc="1" name="price-row">
                                                        </div>
                                                    </div>
                                                    <div class="col col-12 col-md-6 ">
                                                        <div class="pt_Quantity ">
                                                            <label id="price" class="text-black-50 px-3 d-flex align-items-center">Disc</label>
                                                            <input type="number" id='discount-row' class="form-control w-100" min="0" max="100" step="1" value="0" data-inc="1" name="discount-row">
                                                            <div class="input-group-prepend percent-style">
                                                                <span class="input-group-text" id="basic-addon2">
                                                                    <span data-feather="percent"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col col-12 col-md-4 py-2">
                                                <div class="pt_Quantity ">
                                                    <label id="price" class="text-black-50 px-3 d-flex align-items-center">Qte</label>
                                                    <input type="number" id='' class="form-control w-100" min="1" max="100" step="1" value="1" data-inc="1" name="">
                                                </div>
                                            </div> -->
                                                    <div class="col col-12 col-md-12 text-end  d-flex justify-content-end">
                                                        <div>
                                                            <button id="costum-product" class="btn btn-primary  btn-squared text-capitalize btn-success my-3 mx-4 ">Add
                                                            </button>
                                                        </div>
                                                    </div>



                                                </div>

                                            </div>

                                            <!-- product list details -->
                                            <div class="form-group quantity-appearance">
                                                <div class="card">
                                                    <div class="card-header color-dark fw-500">
                                                        Attributes List
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table4  p-25 bg-white mb-30">
                                                            <div class="table-responsive">
                                                                <table class="table mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>color</th>
                                                                            <th>size</th>
                                                                            <th>price</th>
                                                                            <th>discount</th>
                                                                            <th>Quantity</th>
                                                                            <th>delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div  class="d-flex justify-content-end">
                                            <!-- submit -->
                                            <button class='m-2  btn btn-primary btn-default btn-squared text-capitalize'  value=''>save product
                                            </button>
                                            </div>


                            </form>
                            <!-- End: form -->
                            <!-- Images : form -->
                            <!-- <div class="card">
                                <div class="card-header color-dark fw-500">
                                    Add Images
                                </div>
                                <div class="card-body">

                                    <form  method='POST' action="{{route('admin.products.storeImages')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                                        @csrf
                                    </form>
                                    <script type="text/javascript" action="{{url('image/upload/store')}}">
                                        Dropzone.options.dropzone = {
                                            maxFilesize: 12,
                                            renameFile: function(file) {
                                                var dt = new Date();
                                                var time = dt.getTime();
                                                return time + file.name;
                                            },
                                            acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                            addRemoveLinks: true,
                                            timeout: 5000,
                                            success: function(file, response) {
                                                console.log(response);
                                            },
                                            error: function(file, response) {
                                                alert('ERROOR');
                                            }
                                        };
                                    </script>
                                </div>
                            </div> -->
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
                    // document.getElementById('costum-div').classList.add('d-flex')
                    document.getElementById('price-row').value = document.querySelector('input[name="price"]').value
                    document.getElementById('discount-row').value = document.querySelector('input[name="discount"]').value

                }
            })


        }
        item.addEventListener('change', (event) => {
            if (item.checked) {
                size_pick.forEach(item => {
                    if (item.checked) {
                        document.getElementById('costum-div').classList.remove('d-none')
                        // document.getElementById('costum-div').classList.add('d-flex')
                        document.getElementById('price-row').value = document.querySelector('input[name="price"]').value
                        document.getElementById('discount-row').value = document.querySelector('input[name="discount"]').value

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
                        // document.getElementById('costum-div').classList.add('d-flex')
                        document.getElementById('price-row').value = document.querySelector('input[name="price"]').value
                        document.getElementById('discount-row').value = document.querySelector('input[name="discount"]').value

                    }
                })
            }
        })
    });

    custom_product.addEventListener('click', (event) => {
            event.preventDefault()
            const tbody = document.querySelector('tbody');
            const colors = document.querySelectorAll('.color-pick')
            const sizes = document.querySelectorAll('.size-pick')
            var color
            var size
            var price = document.getElementById('price-row').value
            var discount = document.getElementById('discount-row').value
            var dont_create = false
            var submit = document.querySelector('button[name="submit"]')

            if (discount == '') {
                discount = 'null'
            }
            colors.forEach(item => {
                if (item.checked) {
                    if (item.value == 'custom') {
                        color = document.getElementById('other-color').value
                    }
                    color = item.value

                }
            })
            sizes.forEach(item => {

                if (item.checked) {
                    size = item.value
                }
            })
            for (var i = 0, row; row = tbody.rows[i]; i++) {
                for (var j = 0, col; col = row.cells[j]; j++) {
                    if (row.cells[0].id == color && row.cells[1].id == size) {
                        var input = row.cells[4].children[0].children[0]
                        dont_create = true

                    }

                }

            }


            if (tbody.children.length > 10) {
                alert('you can not depass 10 products !')

            } else if ( false) {
                alert('you must change the price ')

            } else if (discount > 100) {
                alert('the discount percentage must be lower than 100')
            } else if (!dont_create) {

                tbody.innerHTML += `
            <tr >
                    <td style='vertical-align: middle' id='${color}'>
                        <div class="userDatatable-content"  >
                            <div class="color-box ${color}" style='background-color : ${color}' ></div>
                            <input type='hidden' value='${color}' name='color_${document.querySelector('tbody').children.length + 1}' />
                        </div>
                    </td>
                    <td style='vertical-align: middle' id='${size}'>
                        <div class="userDatatable-content" name='size-${document.querySelector('tbody').children.length + 1}'>
                            ${size}
                            <input type='hidden' value='${size}' name='size_${document.querySelector('tbody').children.length + 1}' />

                        </div>
                    </td>
                    <td style='vertical-align: middle'>
                        <div class="userDatatable-content">
                            ${price} €
                            <input type='hidden' value='${price}' name='price_${document.querySelector('tbody').children.length + 1}' />
                        </div>
                    </td>
                    <td style='vertical-align: middle'>
                        <div id="discount-div" class="userDatatable-content ${discount=='null'? 'text-danger' : ''}">
                            ${discount == 'null'? `${discount}` : `-${discount}%`}
                            <input  type='hidden' value='${discount}' name='discount_${document.querySelector('tbody').children.length + 1}' />
                        </div>
                    </td>
                    <td style='vertical-align: middle'>
                    <div class="userDatatable-content" name='qte-${document.querySelector('tbody').children.length + 1}'>
                            1
                    </div>
                    <input type='hidden' value='1' name='qte_${document.querySelector('tbody').children.length + 1}' />
                    </td>
                    <td style='vertical-align: middle'>
                        <div style='cursor:pointer;' class="delete-costum-product userDatatable-content text-center">
                            <i class="fa fa-trash text-danger"></i>
                        </div>
                    </td>
                </tr>    
            
            `
            } else {
                for (var i = 0, row; row = tbody.rows[i]; i++) {
                    for (var j = 0, col; col = row.cells[j]; j++) {

                        if (row.cells[0].id == color && row.cells[1].id == size) {
                            var child = row.cells[4].children[0]
                            var hidden_input = row.cells[4].children[1];
                        }
                    }
                }
                child.innerHTML = parseInt(child.innerHTML) + 1
                hidden_input.value = parseInt(hidden_input.value) + 1

            } 


            delete_costum_product = document.querySelectorAll('.delete-costum-product');
            delete_costum_product.forEach(item => {
                item.addEventListener('click', (event) => {
                    item.parentElement.parentElement.remove(item.parentElement.parentElement)
                    delete_costum_product = document.querySelectorAll('.delete-costum-product');
                })

            })
        }

    )



    const discount_check = document.getElementById('check-1')
    if (discount_check.checked) {
        document.getElementById('input-discounted').classList.add('d-none')
        document.getElementById('discounted-input').value = null

    };
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

        } else {

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
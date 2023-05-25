@extends('admin.app')

@section('content')

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
                            <form action="{{route('admin.products.store')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- form group -->
                                <div class="form-group">
                                    <label for="name1">product name</label>
                                    <input type="text" class="form-control" id="name1" placeholder="red chair" name="name">
                                </div>



                                <!-- form group 2 -->
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

                                <!-- form group 3 -->
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

                                <div class="form-group quantity-appearance">
                                    <label>Add </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2">
                                                <span data-feather="percent"></span></span>
                                        </div>
                                        <div class="pt_Quantity">
                                            <input type="number" class="form-control" min="0" max="100" step="1" value="0" data-inc="1" name="discount_price">
                                        </div>
                                    </div>
                                </div>
                                <!-- form group 4 -->
                                <div class="form-group quantity-appearance">
                                    <label>Discount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2">
                                                <span data-feather="percent"></span></span>
                                        </div>
                                        <div class="pt_Quantity">
                                            <input type="number" class="form-control" min="0" max="100" step="1" value="0" data-inc="1" name="discount_price">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="loram ipsum dolor sit amit" name="description"></textarea>
                                </div>
                                <div class="card add-product p-sm-30 p-20 ">
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
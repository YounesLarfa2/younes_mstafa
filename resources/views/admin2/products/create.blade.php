@extends('admin2.app')

@section('content')
<div class="pagetitle">
    <h1>Products</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item">Products</li>
            <li class="breadcrumb-item active">Create Product</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col col-lg-12">
            @if (count($errors) > 0)
            <div class="alert alert-danger w-100 m-auto ">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Product</h5>

                    <!-- General Form Elements -->
                    <form method="POST" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-6">
                                <label class="col-sm-2 col-form-label">Category </label>
                                <select class="form-select" aria-label="Default select example" name='category_name'>
                                    @foreach ($categories as $category )
                                    <option value="{{$category->name}}">{{$category->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-3">
                                <label for="inputText" class=" col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='name'>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-6">
                                <label for="inputPassword" class=" col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control w-100" style="height: 100px" name='description'></textarea>
                                </div>

                            </div>
                            <div class="col-sm-12  col-md-6 ">

                                <label for="inputNumber" class="col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name='price'>

                                </div>
                                <label for="inputNumber" class="col-form-label">Discount %</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="discount" name='discount'>

                                </div>

                                <div class="form-check">
                                    <input class="form-check-input mb-2" type="checkbox" id="gridcheck">
                                    <label class="form-check-label small " for="gridcheck">
                                        i dont want to discount the price
                                    </label>
                                </div>
                                <script>
                                    document.getElementById('gridcheck').addEventListener('click', (event) => {
                                        if (event.target.checked) {
                                            document.getElementById('discount').disabled = true;
                                        } else {
                                            document.getElementById('discount').disabled = false;

                                        }
                                    })
                                </script>


                            </div>

                            <div class="col-sm-12  col-md-6  ">
                                <label for="inputNumber" class=" col-form-label">Main image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name='image'>
                                </div>
                            </div>
                            <div class="col-sm-12  col-md-12  ">
                                <div class="card mb-3 my-4">
                                    <div class="card-header">
                                        <label for="inputNumber" class=" col-form-label">Create Attributes</label>

                                    </div>
                                    <div class="card-body ">
                                        <div class="form-group py-1 mb-2">
                                            <label for="exampleFormControlTextarea1 ">Color Picker</label>
                                            <div class="container my-2">
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
                                        <div class="form-group ">
                                            <label for="exampleFormControlTextarea1 ">Other color</label>
                                            <div class="container py-2">
                                                <input class="color-box" type="color" id="other-color" name="color-pick" style="width : 30px;border : none"> <label class="checkbox-label">
                                                    <input type="radio" value="custom" class="checkbox-input  color-pick" name="color-pick">
                                            </div>
                                        </div>
                                        <div class="border my-4"></div>
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
                            </div>
                            <div class="col-sm-12  col-md-12  ">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <label for="inputNumber" class="col-form-label">Price</label>
                                        <input type="number" class="form-control " id='price-row'>
                                    </div>

                                    <div class="col-sm-12 col-md-4">
                                        <label for="inputNumber" class="col-form-label">Discount %</label>
                                        <input type="number" class="form-control" id="discount-row">
                                    </div>

                                    <div class="col-sm-12 col-md-4">
                                        <label for="inputNumber" class="col-form-label">Quantity</label>
                                        <input type="number" class="form-control" id="discount" value='1' id='qte-row'>
                                    </div>

                                    <div class="col-sm-12 col-md-12 text-end">
                                        <label for="inputNumber" class="btn btn-secondary p-2 my-2 px-4" id='add-row'>Add</label>
                                    </div>
                                </div>
                                <script>
                                    add_row = document.getElementById('add-row');
                                    add_row.addEventListener('click', (event) => {
                                            event.preventDefault()
                                            const tbody = document.querySelector('tbody');
                                            const colors = document.querySelectorAll('.color-pick')
                                            const sizes = document.querySelectorAll('.size-pick')
                                            var color
                                            var size
                                            var price = document.getElementById('price-row').value
                                            var discount = document.getElementById('discount-row').value
                                            var dont_create = false
                                            var qte = document.getElementById('qte-row')
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

                                            } else if (price == '') {
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
                                                                        <i class="bi bi-trash text-danger"></i>
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
                                </script>
                            </div>
                        </div>

                        <div class="col-sm-12  col-md-12 ">
                            <!-- <label for="inputNumber" class=" col-form-label"> image</label> -->
                            <div class="form-group quantity-appearance">
                                <div class="card">
                                    <div class="card-header color-dark fw-500 text-center">
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
                        </div>
                </div>















                <div class="row mb-3 px-4">
                    <div class="col-sm-12 text-end ">
                        <button type="submit" class="btn btn-secondary ">Store Data</button>
                    </div>
                </div>

                </form>
                <!-- End General Form Elements -->

            </div>
        </div>

    </div>


    </div>
</section>
@endsection
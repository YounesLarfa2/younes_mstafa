@extends('admin2.app')

@section('content')
<div class="pagetitle">
    <h1>Products</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item">Products</li>
            <li class="breadcrumb-item active">Display Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="card-body pb-0">
    <h5 class="card-title">Product List </h5>

    <table class="table table-borderless table-bordered ">
        <thead>
            <tr style="text-align: start;">
                <th scope="" style="text-align :start">Image</th>
                <th scope="" style="text-align :start">Name</th>
                <th scope="" style="text-align :start">Price</th>
                <th scope="">Discount</th>
                <th scope="" class='text-center'>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr style="vertical-align: middle;">
                <th scope="row"><a href="#"><img class="img-fluid img-thumbnail rounded-circle" src="{{asset('admin2/img/product-1.jpg')}}" alt="" style='width:75px'></a></th>
                <td><a href="#" class="text-primary fw-bold">{{$product->name}}</a></td>
                <td class="fw-bold">{{$product->price}}</td>
                <td>{{$product->discount}}</td>
                <td>
                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-content-between">
                        <a  href="{{route('admin.products.show',$product->id)}}" class="view  hover-effect px-2  ">
                            <i class="bi bi-eye text-primary fs-3 "></i></a>
                        <a href="#" class="edit  hover-effect px-2">
                            <i class="bi bi-pen-fill text-warning fs-3 "></i></a>

                        <form action="{{route('admin.products.destroy',$product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a type='submit'  class=" remove hover-effect px-2" onclick="this.parentNode.submit()   ">
                                <i class="bi bi-trash-fill text-danger fs-3"></i></button>
                        </form>

                    </ul>
                </td>


            </tr>
            <!-- data-bs-toggle="modal" data-bs-target="#display" -->
            <!-- Eye Modal -->
            <div class="modal fade" id="display" tabindex="-1" aria-labelledby="display" aria-hidden="true">
                <form action="{{route('admin.categories.store')}}" id="diplaymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabelaction="{{route('admin.categories.store')}}" id="addForm"">Add New Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="form-group py-4">
                                    <label for="name1" class="form-label py-2 fs-4 fw-bold"> Create new </label>
                                    <input type="text" class="form-control" name="name" id="name1" placeholder="Category Name">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>

</div>

@endsection

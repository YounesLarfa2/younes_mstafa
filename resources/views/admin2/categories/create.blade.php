@extends('admin2.app')

@section('content')
<div class="pagetitle">
    <h1>Categories</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item">Categories</li>
            <li class="breadcrumb-item active">Create Category</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="">
    <div class="row justify-content-around">
        <div class="col-12 col-md-4 card align-self-baseline">
            <div class="card-body  d-flex flex-column justify-content-center">
                <form action="{{route('admin.categories.store')}}" id="addForm" method="POST">
                    @csrf
                    <div class="form-group py-4">
                        <label for="name1" class="form-label py-2 fs-4 fw-bold"> Create new category</label>
                        <input type="text" name="name" class="form-control" id="name1" placeholder="Category Name">
                    </div>


                    <div class="button-group d-flex pt-25 justify-content-end">
                        <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Create
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-12 col-md-7 card">
            <h5 class="card-title">Categories List</h5>
            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col" style="text-align: center;">Delete</th>
                    </tr>
                </thead>
                <tbody id="memberBody">
                    @foreach ($categories as $category )
                    <tr>
                        <td scope="col">{{$loop->iteration}}</td>
                        <td scope="col">{{$category->name}}</td>
                        <td scope="col">{{$category->created_at}}</td>
                        <td>
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-content-between">
                                <form action="{{route('admin.categories.destroy',$category->id)}}" method="POST" id='delete-form'>
                                    @csrf
                                    @method('DELETE')
                                    <a type='submit' class=" remove hover-effect px-2" onclick="this.parentNode.submit()">
                                        <i class="bi bi-trash-fill text-danger fs-3"></i></a>
                                </form>

                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
</section>




@endsection
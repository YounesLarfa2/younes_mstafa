==========================================================
categories > modals.blade.php
==========================================================
<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="{{route('admin.categories.store')}}" id="addForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add New Category</h5>
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
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
    </form>
</div>
</div>
</div>
==========================================================
categories > index.blade.php
==========================================================


<div class="col-md-10 col-md-offset-1">
    <button type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right m-2"> Create</button>
    </h2>
</div>


<tbody id="memberBody">

</tbody>


@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        showMember();
        
        $('#addForm').on('submit', function(e) {
            e.preventDefault();
            var form = $(this).serialize();
            var url = $(this).attr('action');
            $.ajax({
                type: 'POST',
                url: url,
                data: form,
                dataType: 'json',
                success: function() {
                    $('#addnew').modal('hide');
                    $('#addForm')[0].reset();
                    showMember();
                }
            });
        });

        function showMember(){ 
            $.get("{{ route('admin.categories.list') }}", function(data){ 
        
                $('#memberBody').empty().html(data);
            })
        }
    })
</script>

@endsection

==========================================================
CategoryController 
==========================================================

public function show_data()
    {
        $categories = Category::paginate(10);  
        return view('admin2.categories.list',compact('categories'));
    }


    public function store(Request $request)
    {
        if ($request->ajax()){
            // Create New Member
            $category = new Category;
            $category->name = $request->input('name');
            $category->save();
             
            return response($category);
        }
    }

==========================================================
categories > list.blade.php
==========================================================

@foreach ($categories as $category )

<tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$category->name}}</td>
    <td>{{$category->created_at}}</td>
    <td>
        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-content-between">
            <a href="#" class="view  hover-effect px-2  ">
                <i class="bi bi-eye text-primary fs-3 "></i></a>
            <a href="#" class="edit  hover-effect px-2">
                <i class="bi bi-pen-fill text-warning fs-3 "></i></a>

            <form action="{{route('admin.categories.destroy',$category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a type='submit' class=" remove hover-effect px-2" onclick="document.querySelector('form').submit()">
                    <i class="bi bi-trash-fill text-danger fs-3"></i></button>
            </form>

        </ul>
    </td>

</tr>
@endforeach

==========================================================
app.blade.php
==========================================================

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{asset('admin2/js/jquery-3.7.0.min.js')}}"></script>
@yield('script')



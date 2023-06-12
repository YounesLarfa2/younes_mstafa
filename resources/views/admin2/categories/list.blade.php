@foreach ($categories as $category )

<tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$category->name}}</td>
    <td>{{$category->created_at}}</td>
    <td>
        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-content-center">
            <!-- <a href="#" class="view  hover-effect px-2  ">
                <i class="bi bi-eye text-primary fs-3 "></i></a>
            <a href="#" class="edit  hover-effect px-2">
                <i class="bi bi-pen-fill text-warning fs-3 "></i></a> -->

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

@extends('admin2.app')
@section('content')
<div class="pagetitle">
    <h1>Categories</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}" >Home</a></li>
            <li class="breadcrumb-item">Categories</li>
            <li class="breadcrumb-item active">Display Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="card">

    <div class="div d-flex justify-content-end">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    <button  type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right m-2"> Create</button>
                </h2>
            </div>
        </div>
    </div>



    <div class="card-body">



        <h5 class="card-title">Categories List</h5>
        <!-- Bordered Table -->
        <table class="table table-bordered" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col" style="text-align: center;">Delete</th>
                </tr>
            </thead>
            <tbody id="memberBody">

            </tbody>
        </table>
        <!-- End Bordered Table -->

    </div>
</div>

@endsection

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

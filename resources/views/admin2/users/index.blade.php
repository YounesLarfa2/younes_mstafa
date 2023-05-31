@extends('admin2.app')

@section('content')
<div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Display Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users List</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Date registred</th>
                    <th scope="col">Email</th>
                    <th scope="col">Orders</th>
                    <th scope="col">Total spend</th>
                    <th scope="col">Country / Region</th>
                    <th scope="col">Total spend</th>
                    <th scope="col">Total spend</th>
                    <th scope="col">Total spend</th>
                    <th scope="col">Role</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    <td>
                        <img src="{{$user->profile_img}}" style='width:25px'/>
                        {{$user->name}}
                    </td>
                    <td>{{$user->email}}</td>
                    <td>329</td>
                    <td>
                        <span class="{{($user->role == '1')? 'text-info' : 'text-danger'}}">
                            {{($user->role == '1')? 'Customer' : 'Admin'}}
                        </span>
                    </td>
                  </tr>
                    @endforeach

                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection
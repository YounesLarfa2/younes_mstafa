@extends('auth.app')

@section('content')
    <div class="">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                        <div class="card mb-3" style="width: 600px;">

                            <div class="card-body" style="padding: 30px">

                                <div class="d-flex justify-content-center pt-10">
                                    <a href="/">
                                        <img src="{{ asset('uploads/logo2.png') }}" alt="" width="300"
                                            style="padding-left: 35px" />
                                    </a>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12 my-2">
                                        <label for="yourUsername" class="form-label">email</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="email" class="form-control" id="yourUsername"
                                                required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                            required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <style>
                                            input[type=checkbox] {
                                                ACCENT-COLOR: #dc3545;
                                                -webkit-appearance: menulist;
                                            }
                                        </style>
                                    </div>
                                    <div class="col-12 my-2">
                                        <button class="btn ark w-100" style="background: #8eabff;color:white;"
                                            type="submit">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="{{ url('/register') }}"
                                                style="color:red">Create an account</a></p>
                                    </div>

                                </form>

                            </div>
                        </div>


                    </div>
                </div>

        </section>

    </div>
@endsection

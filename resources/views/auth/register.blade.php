@extends('auth.app')

@section('content')
    <div class="">

        <div class="">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                            <div class="card mb-3" style="width: 600px;padding:30px">

                                <div class="card-body">

                                    <div class="d-flex justify-content-center ">
                                        <a href="/">
                                            <img src="{{ url('uploads/logo2.png') }}" alt="" width="300"
                                                style="padding-left: 35px" />
                                        </a>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="col-12 my-2">
                                            <label for="yourName" class="form-label">Your Name </label>
                                            <input type="text" name="name" class="form-control" id="yourName"
                                                required>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>

                                        <div class="col-12 my-2">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                required>
                                            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                        </div>


                                        <div class="col-12 my-2">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <label for="yourPassword" class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12 my-2">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a
                                                        href="#" class="text-danger">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>

                                            <style>
                                                input[type=checkbox] {
                                                    ACCENT-COLOR: #dc3545;
                                                    -webkit-appearance: menulist;
                                                }
                                            </style>
                                        </div>
                                        <div class="col-12 my-2">
                                            <button class="btn  w-100"
                                                style="background-color: #8eabff;color:white;"
                                                type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a href="{{ url('/login') }}"
                                                    class="text-danger">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>

    </div>
@endsection

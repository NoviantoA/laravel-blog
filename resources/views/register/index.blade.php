@extends('layouts.main')

@section('container')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="/register" method="POST">
                        <p class="lead fw-normal mb-0 me-3"></p>
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Registration</p>
                        </div>
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input name="name" value="{{ old('name') }}" type="text" id="form3Example3"
                                class="form-control form-control @error('name') is-invalid
                            @enderror"
                                placeholder="Name..." required />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="form-label" for="form3Example3">Name</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input name="username" value="{{ old('username') }}" type="text" id="form3Example3"
                                class="form-control form-control @error('username')  is-invalid

                            @enderror"
                                placeholder="Username..." required />
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="form-label" for="form3Example3">Username</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input name="email" value="{{ old('email') }}" type="email" id="form3Example3"
                                class="form-control form-control @error('email')  is-invalid

                            @enderror"
                                placeholder="name@example.com" required />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input name="password" type="password" id="form3Example4"
                                class="form-control form-control @error('password')  is-invalid

                            @enderror"
                                placeholder="Enter password" required />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">


                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already registered? <a href="/login"
                                    class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

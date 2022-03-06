@extends('layouts.admin')

@section("web-heading")
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Login</h1>
    </div>
@endsection

@section("main-content")
    <div class="container mt-5 col-6">
        <div class="card">
            <div class="card-body">
                <form class="row g-3 needs-validation" action="" method="post">
                    @csrf
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label">Email</label>
                        <input type="text" class="form-control" id="validationCustom01" value="{{ old('email') }}" name="email">
                        @error('email')
                            <p class="error-message">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="validationCustom02" class="form-label">Password</label>
                        <input type="password" class="form-control" id="validationCustom02" value="{{ old('password') }}" name="password">

                        @error('password')
                            <p class="error-message">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                            <label class="form-check-label" for="invalidCheck">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>

                    <div class="col-12">
                        {{-- <a href="{{route('web.register')}}">Register User</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
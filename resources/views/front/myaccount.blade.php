@extends('front.layout.app')

@section('content')
    <main>

        <section class="Return-policy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="loca">
                            <h6>HOME > <span>My Account</span></h6>
                        </div>
                        <div class="return">
                            <div class="Return-Warranty-head">
                                @if (Auth::guard('customer')->check())
                                    <p style="color: green;">Welcome, {{ Auth::guard('customer')->user()->name }}!</p>
                                    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Welcome, {{ Auth::guard('customer')->user()->name }}!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div> --}}
                                @else
                                    <h1>Login</h1>
                                @endif

                            </div>
                            <div class="Return-Warranty-inner">
                                <p>
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                </p>

                                {{-- Display user information if logged in --}}
                                @if (Auth::guard('customer')->check())
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="account-info">
                                            <div class="col-md-4">
                                                <label class="control-label required" for="name"
                                                    aria-required="true">Name:</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ Auth::guard('customer')->user()->name }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label required" for="email"
                                                    aria-required="true">Email:</label>
                                                <input type="text" name="email" class="form-control"
                                                    value="{{ Auth::guard('customer')->user()->email }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label required" for="phone"
                                                    aria-required="true">Phone:</label>
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ Auth::guard('customer')->user()->phone }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="control-label required" for="address"
                                                    aria-required="true">Address:</label>
                                                <textarea name="address" class="form-control" style="width: 30vw; height:20vh;">{{ Auth::guard('customer')->user()->address }}</textarea>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                    {{-- Display login form if not logged in --}}
                                @else
                                    <div class="account-info">
                                        <form action="{{ route('login_newUser') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('post')
                                            <div class="col-md-4">
                                                <label class="control-label required" for="phone"
                                                    aria-required="true">Mob no.:</label>
                                                <input type="text" name="phone" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label required" for="password"
                                                    aria-required="true">Password:</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                            <p>Not registered? <a href="{{ route('new_register') }}" style="color: blue;">
                                                    Register</a></p>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

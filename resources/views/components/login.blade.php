@extends('layouts.masterHome')

@section('content')
<div class="login-page bg-light pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17">
    <div class="container">
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                
                @if(session('error'))
                    <div class="alert alert-danger mb-3" style="border-radius: 4px; font-size: 0.9rem;">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <form action="{{route('postLogin')}}" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="mb-1" style="font-weight: 500;">Email Address</label>
                                <input type="email" class="form-control" name="signin-email" placeholder="Enter your email" required>
                            </div>

                            <div class="form-group mb-4">
                                <label class="mb-1" style="font-weight: 500;">Password</label>
                                <input type="password" class="form-control" name="signin-password" placeholder="Enter password" required>
                            </div>

                            <div class="form-footer d-flex justify-content-between align-items-center mt-5">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>Log In</span>
                                </button>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="signin-remember">
                                    <label class="custom-control-label" for="signin-remember">Stay signed in</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-box {
        max-width: 570px;
        margin-left: auto;
        margin-right: auto;
        background-color: #fff;
        padding: 4.4rem 3.7rem 4.4rem;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border-radius: 8px;
    }
    .nav-pills .nav-link {
        color: var(--text-main);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 2px solid transparent;
        padding: 1rem;
    }
    .nav-pills .nav-link.active {
        background-color: transparent !important;
        color: var(--primary-color) !important;
        border-bottom: 2px solid var(--primary-color);
    }
</style>
@endsection

@extends('layouts.masterlayout')

@section('title') Email Verification @endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Email Verification</li>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    <div class="mb-4 text-muted">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success mb-4">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link text-danger">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerJs')
@endsection

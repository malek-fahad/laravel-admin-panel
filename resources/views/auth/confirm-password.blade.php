@extends('layouts.masterlayout')

@section('title')Profile @endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')
    <div class="row justify-content-center">
        <!-- Column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</h6>
                    
                    <form method="POST" action="{{ route('password.confirm') }}" class="m-t-40">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="controls">
                                        <input id="password" name="password" type="password" class="form-control" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                                        
                                        @if ($errors->has('password'))
                                            <div class="help-block text-danger">
                                                @foreach ($errors->get('password') as $error)
                                                    <div>{{ $error }}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">{{ __('Confirm') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerJs')
   
@endsection


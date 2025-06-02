@extends('layouts.masterlayout')

@section('title')Add @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('users.all')}}">Users</a></li>
    <li class="breadcrumb-item active">Add</li>
@endsection

@section('content')
    
    <div class="row justify-content-center">
        <!-- Column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            <h4 class="card-title">Add New User</h4>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a href="{{route('users.all')}}" class="btn btn-info">All Users</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="m-t-40" method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputuname2">{{__('Name')}}</label>
                            <div class="controls">
                                <div class="input-group">
                                    <input id="name" name="name" type="name" class="form-control" value="" required autofocus autocomplete="name" placeholder="Name">
                                </div>
                                @if ($errors->has('name'))
                                    <div class="help-block">
                                        @foreach ($errors->get('name') as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname2">{{__('Email')}}</label>
                            <div class="controls">
                                <div class="input-group">
                                    <input id="email" name="email" type="email" class="form-control" value="" required autofocus autocomplete="username" placeholder="Email">
                                </div>
                                @if ($errors->has('email'))
                                    <div class="help-block">
                                        @foreach ($errors->get('email') as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role_id">{{__('User Role')}}</label>
                            <div class="controls">
                                <div class="input-group">
                                    <select class="form-control custom-select" id="role_id" name="role_id" type="role_id" required autofocus>
                                        <option value="">Select User Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('role_id'))
                                    <div class="help-block">
                                        @foreach ($errors->get('role_id') as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname2">{{__('Password')}}</label>
                            <div class="controls">
                                <div class="input-group">
                                    <input class="form-control" id="password" type="text" name="password" required autocomplete="new-password" placeholder="Password" value="12345678">
                                </div>
                                @if ($errors->has('password'))
                                    <div class="help-block">
                                        @foreach ($errors->get('password') as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuname2">{{__('Confirm Password')}}</label>
                            <div class="controls">
                                <div class="input-group">
                                    <input class="form-control" id="password_confirmation" type="text" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" value="12345678">
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <div class="help-block">
                                        @foreach ($errors->get('password_confirmation') as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-t-40">
                            <button class="btn btn-info" type="submit">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerJs')
   
@endsection
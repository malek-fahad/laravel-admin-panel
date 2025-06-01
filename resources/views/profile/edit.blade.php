@extends('layouts.masterlayout')

@section('title')Profile @endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-6 d-flex flex-column">
            <div class="card" style="flex: 1 1 auto;">
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex flex-column">
            <div class="card" style="flex: 1 1 auto;">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerJs')
   
@endsection
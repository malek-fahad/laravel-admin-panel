@extends('layouts.masterlayout')

@section('title')Profile @endsection

@section('HeaderJs')
    
    <!-- file upload CSS -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/dropify/dist/css/dropify.min.css')}}">
    <!-- isons CSS -->
    <style>
        .dropify-wrapper .dropify-message p {
            text-align: center;
        }
    </style>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="flex: 1 1 auto;">
                <div class="card-body">
                    @include('profile.partials.profile-status')
                </div>
            </div>
        </div>
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
   <!-- jQuery file upload -->
    <script src="{{asset('/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();
    
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
    
            // Used events
            var drEvent = $('#input-file-events').dropify();
    
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
    
            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
    
            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });
    
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
@endsection
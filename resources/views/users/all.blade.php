@extends('layouts.masterlayout')

@section('title')Users @endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Users</li>
@endsection

@section('content')
    
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <h4 class="card-title">All Users</h4>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a href="{{route('users.add')}}" class="btn btn-info">Add New User</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered m-t-40">
                            <thead>
                                <tr>
                                    <th class="text-center">S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="text-center">Verified</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Created Date</th>
                                    <th class="text-nowrap text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users->isEmpty())
                                    <tr>
                                        <td colspan="7" class="text-gray-600">No user available at the moment.</td>
                                    </tr>
                                @else
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ sprintf('%02d', $loop->iteration) }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                {{ $user->email }}
                                                @if (is_null($user->email_verified_at))
                                                   <i class="fas fa-times-circle text-danger ms-2" title="Not Verified"></i>
                                                @else
                                                    <i class="fas fa-check-circle text-success ms-2" title="Verified"></i>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if (is_null($user->email_verified_at))
                                                   Not Verified
                                                @else
                                                    Verified
                                                @endif
                                            </td>
                                            <td class="text-center" title="User Role">
                                                @php
                                                    $labelClass = match($user->role_id) {
                                                        1 => 'label-success',
                                                        2 => 'label-primary',
                                                        default => 'label-info',
                                                    };
                                                @endphp
                                                <span class="label {{ $labelClass }}"> {{ $user->role->name }}</span>
                                            </td>
                                            <td class="text-center" title="{{ $user->created_at->format('F j, Y g:i A') }}">{{ $user->created_at->format('F j, Y') }}</td>

                                            <td class="text-nowrap text-center py-0" style="line-height: 48px;">
                                                <button class="btn btn-info view-service" title="View user">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                                <a href="#" title="Edit user" class="btn btn-warning">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                @if ($user->id!=1)
                                                    <button class="btn btn-danger delete-service" data-id="" title="Delete user">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                @else
                                                    <button class="btn btn-danger delete-service"  disabled title="Can't delete primary user">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerJs')
   
@endsection
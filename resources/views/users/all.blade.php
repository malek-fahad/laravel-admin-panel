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
                                                <button class="btn btn-info view-user" data-id="{{ $user->id }}" title="View user">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                                @if ($user->id!=1)
                                                    <a href="{{ route('users.edit', $user->id) }}" title="Edit user" class="btn btn-warning">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger delete-user" data-id="{{ $user->id }}" title="Delete user">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>

                                                @else
                                                    <button class="btn btn-warning"  disabled title="Can't edit primary user">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger delete-user" data-id="{{ $user->id }}"  disabled title="Can't delete primary user">
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
   <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="userModalLabel">User Details</h3>
                    <button type="button" class="btn btn-danger view-user-close">x</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td class="text-center">:</td>
                                    <td><span id="user-name"></span></td>
                                </tr>
                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td class="text-center">:</td>
                                    <td><span id="user-email"></span></td>
                                </tr>
                                <tr>
                                    <td><strong>Verified Status</strong></td>
                                    <td class="text-center">:</td>
                                    <td><span id="user-status"></span></td>
                                </tr>
                                <tr>
                                    <td><strong>User Role</strong></td>
                                    <td class="text-center">:</td>
                                    <td><span id="user-role"></span></td>
                                </tr>
                                <tr>
                                    <td><strong>Image</strong></td>
                                    <td class="text-center">:</td>
                                    <td><img id="user-image" src="" alt="user Image" style="width: 100px;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.view-user-close').on('click', function () {
            $('#userModal').modal('hide');
            $('tr').removeClass('row-selected');
        });
        $('.view-user').on('click', function () {
            const userId = $(this).data('id');

            const row = $(this).closest('tr');


            $('tr').removeClass('row-selected');

            row.addClass('row-selected');

            $('#user-title').text(userId);

            // Send AJAX request
            $.ajax({
                url: `/users/${userId}`,
                type: 'GET',
                success: function (response) {
                    if (response.success) {
                        // Populate modal with user data
                        $('#user-name').text(response.data.name);
                        $('#user-email').text(response.data.email);
                        $('#user-status').html(response.data.email_verified_at!= null ? 'Verified <i class="fas fa-check-circle text-success ms-2" title="Verified"></i>' : 'Not Verified <i class="fas fa-times-circle text-danger ms-2" title="Not Verified"></i>');
                        let labelClass = 'label-info';
                        if (response.data.role_id == 1) {
                            labelClass = 'label-success';
                        } else if (response.data.role?.name_id == 1) {
                            labelClass = 'label-primary';
                        }
                        $('#user-role').html(`<span class="label ${labelClass}"> ${response.data.role.name}</span>`);

                        $('#user-image').attr('src', response.data.profile_picture ? `/storage/${response.data.profile_picture}` : '{{ asset("assets/images/basic/no_profile_picture.png") }}');

                        // Show the modal
                        $('#userModal').modal('show');
                    } else {
                        $.toast({
                            heading: 'Something is wrong',
                            text: 'user not found.',
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'error',
                            hideAfter: 3000, 
                            stack: 6
                        });
                    }
                },
                error: function () {
                    $.toast({
                        heading: 'Something is wrong',
                        text: 'An error occurred while fetching the client details.',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 3000, 
                        stack: 6
                    });
                },
            });
        });
    </script>
@endsection
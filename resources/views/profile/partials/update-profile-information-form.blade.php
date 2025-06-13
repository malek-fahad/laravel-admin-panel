<h4 class="card-title">{{ __('Profile Information') }}</h4>
<h6 class="card-subtitle">{{ __("Update your account's profile information and email address.") }}</h6>

{{-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form> --}}

<form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="m-t-40 space-y-6">
    @csrf
    @method('patch')

    <div class="row">
        <div class="col-12">
            {{-- @if (is_null(Auth::user()->email_verified_at))
                <div>
                    <p class="text-sm mb-2 text-gray-800 dark:text-gray-200"> {{ __('Your email address is unverified.') }} <i style="height: 20px;width: 20px;display: inline-block;text-align: center;line-height: 20px;border-radius: 50%;font-size: 12px;" class="mdi mdi-close bg-danger text-white"></i></p>
                    <button form="send-verification" class="btn btn-info"> {{ __('re-send email') }}</button>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @else
                <div>
                    <p class="text-sm mb-2 text-gray-800 dark:text-gray-200"> {{ __('Your email address is verified.') }} <i style="height: 20px;width: 20px;display: inline-block;text-align: center;line-height: 20px;border-radius: 50%;font-size: 12px;" class="mdi mdi-check bg-success text-white"></i></p>
                </div>
            @endif --}}
            <div class="form-group">
                <label for="name">{{__('Name')}}</label>
                <div class="controls">
                    <input id="name" name="name" type="text" class="form-control" value="{{old('name', $user->name)}}" required autofocus autocomplete="name" placeholder="Name">
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
                        <input id="email" name="email" type="hidden"  class="form-control" value="{{old('email', $user->email)}}" required autofocus autocomplete="username" placeholder="Email">
                        <input id="email" type="email" disabled  class="form-control" value="{{old('email', $user->email)}}" required autofocus autocomplete="username" placeholder="Email">
                    </div>
                    @if ($errors->has('email'))
                        <div class="help-block">
                            @foreach ($errors->get('email') as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="role">{{__('Role')}}</label>
                <div class="controls">
                    <div class="input-group">
                        <input id="role" type="text" disabled  class="form-control" value="{{old('role', $user->role->name)}}" required autofocus autocomplete="username" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <h5>Profile Image<span class="text-danger">*</span><small> (image size max 1MB. Supported extensions jpg, .png or .jpeg)</small></h5>
                    <input name="profile_picture" type="file" id="input-file-max-fs" class="dropify" data-max-file-size="1M" accept=".jpg,.png,.jpeg"/>
                </div>
                <div class="form-group col-md-12">
                    <h5>Previous Image<span class="text-danger">*</span></h5>
                    <div class="form-control w-100 d-flex justify-content-center align-items-center text-info p-3" style="min-height: 88%; font-size: 48px;">
                        <img style="max-height: 100px" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('assets/images/basic/no_profile_picture.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-info" type="submit">{{ __('Save') }}</button>
                @if (session('status') === 'profile-updated')
                    <p class="text-success pt-1">{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </div>
</form>

<h4 class="card-title">{{ __('Profile Information') }}</h4>
<h6 class="card-subtitle">{{ __("Update your account's profile information and email address.") }}</h6>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="m-t-40 space-y-6">
    @csrf
    @method('patch')

    <div class="row">
        <div class="col-12">
            @if (is_null(Auth::user()->email_verified_at))
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
            @endif
            <div class="form-group m-t-30">
                <label for="exampleInputuname2">{{__('Name')}}</label>
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
                <button class="btn btn-info" type="submit">{{ __('Save') }}</button>
                @if (session('status') === 'profile-updated')
                    <p class="text-success pt-1">{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </div>
</form>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>
 @if (is_null(Auth::user()->email_verified_at))
    <div>
        <p class="text-sm mb-2 text-gray-800 dark:text-gray-200"> {{ __('Your profile is unverified.') }} <i style="height: 20px;width: 20px;display: inline-block;text-align: center;line-height: 20px;border-radius: 50%;font-size: 12px;" class="mdi mdi-close bg-danger text-white"></i></p>
        <button form="send-verification" class="btn btn-info"> {{ __('re-send verification email') }}</button>
        @if (session('status') === 'verification-link-sent')
            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to your email address.') }}
            </p>
        @endif
    </div>
@else
    <div>
        <p class="text-sm mb-0 text-gray-800 dark:text-gray-200"> {{ __('Profile is verified.') }} <i style="height: 20px;width: 20px;display: inline-block;text-align: center;line-height: 20px;border-radius: 50%;font-size: 12px;" class="mdi mdi-check bg-success text-white"></i></p>
    </div>
@endif

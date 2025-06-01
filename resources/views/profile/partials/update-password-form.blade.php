<h4 class="card-title">{{ __('Update Password') }}</h4>
<h6 class="card-subtitle">{{ __('Ensure your account is using a long, random password to stay secure.') }}</h6>

<form method="post" action="{{ route('password.update') }}" class="m-t-40 space-y-6">
    @csrf
    @method('put')

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="update_password_current_password">{{__('Current Password')}}</label>
                <div class="controls">
                    <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" placeholder="Current Password">
                    @if ($errors->has('current_password'))
                        <div class="help-block">
                            @foreach ($errors->get('current_password') as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label for="update_password_current_password">{{__('New Password')}}</label>
                <div class="controls">
                    <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" placeholder="New Password">
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
                <label for="update_password_password_confirmation">{{__('Current Password')}}</label>
                <div class="controls">
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" placeholder="Confirm New Password">
                    @if ($errors->has('password_confirmation'))
                        <div class="help-block">
                            @foreach ($errors->get('password_confirmation') as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-info" type="submit">{{ __('Save') }}</button>
                @if (session('status') === 'password-updated')
                    <p class="text-success pt-1">{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </div>
</form>

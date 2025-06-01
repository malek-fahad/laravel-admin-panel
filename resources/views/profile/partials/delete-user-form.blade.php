<h4 class="card-title">{{ __('Delete Account') }}</h4>
<h6 class="card-subtitle">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</h6>

<div class="m-t-40">
  @if ($user->id == 1)
    <div class="alert alert-warning" role="alert">
        {{ __("You can't delete primary user.") }}
    </div>
    <button type="button" class="btn btn-danger " disabled="" style="cursor: not-allowed;">Delete Account</button>
  @else
    <!-- Delete Account Button triggers modal -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmUserDeletionModal">
      {{ __('Delete Account') }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" role="dialog" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
          @csrf
          @method('delete')
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmUserDeletionLabel">{{ __('Are you sure you want to delete your account?') }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
              </p>
              <div class="form-group mt-3">
                <label for="password" class="sr-only">{{ __('Password') }}</label>
                <input 
                  type="password" 
                  class="form-control w-75" 
                  id="password" 
                  name="password" 
                  placeholder="{{ __('Password') }}"
                >
                @if ($errors->userDeletion->has('password'))
                  <div class="text-danger mt-2">
                    {{ $errors->userDeletion->first('password') }}
                  </div>
                @endif
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
              <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  @endif
</div>
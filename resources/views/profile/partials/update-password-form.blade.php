        <section>
            <header class="mb-4">
                <h2 class="text-center text-primary">
                    {{ __('Update Password') }}
                </h2>
                <p class="text-center text-muted">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </header>

            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                    <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" required>
                    @if ($errors->updatePassword->get('current_password'))
                        <div class="text-danger mt-1">
                            {{ $errors->updatePassword->first('current_password') }}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('New Password') }}</label>
                    <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" required>
                    @if ($errors->updatePassword->get('password'))
                        <div class="text-danger mt-1">
                            {{ $errors->updatePassword->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
                    @if ($errors->updatePassword->get('password_confirmation'))
                        <div class="text-danger mt-1">
                            {{ $errors->updatePassword->first('password_confirmation') }}
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>

                @if (session('status') === 'password-updated')
                    <p class="text-success mt-2">
                        {{ __('Password updated successfully.') }}
                    </p>
                @endif
            </form>
        </section>
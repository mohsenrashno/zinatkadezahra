<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
<<<<<<< HEAD
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
=======
            {{ __('بروزرسانی کلمه عبور') }}
        </h2>

>>>>>>> detached-head
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
<<<<<<< HEAD
            <x-input-label for="current_password" :value="__('Current Password')" />
=======
            <x-input-label for="current_password" :value="__('کلمه عبور فعلی')" />
>>>>>>> detached-head
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
<<<<<<< HEAD
            <x-input-label for="password" :value="__('New Password')" />
=======
            <x-input-label for="password" :value="__('کلمه عبور جدید')" />
>>>>>>> detached-head
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
<<<<<<< HEAD
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
=======
            <x-input-label for="password_confirmation" :value="__('تکرار کلمه عبور')" />
>>>>>>> detached-head
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
<<<<<<< HEAD
            <x-primary-button>{{ __('Save') }}</x-primary-button>
=======
            <x-primary-button>{{ __('ذخیره') }}</x-primary-button>
>>>>>>> detached-head

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
<<<<<<< HEAD
                >{{ __('Saved.') }}</p>
=======
                >{{ __('ذخیره شد.') }}</p>
>>>>>>> detached-head
            @endif
        </div>
    </form>
</section>

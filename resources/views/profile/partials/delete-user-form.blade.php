<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
<<<<<<< HEAD
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
=======
            {{ __('پاک کردن حساب') }}
        </h2>
        
>>>>>>> detached-head
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
<<<<<<< HEAD
    >{{ __('Delete Account') }}</x-danger-button>
=======
    >{{ __('پاک کردن حساب ') }}</x-danger-button>
>>>>>>> detached-head

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
<<<<<<< HEAD
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
=======
                {{ __('از پاک کردن حساب خود مطمئن هستید؟') }}
            </h2>

          

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('کلمه عبور') }}" class="sr-only" />
>>>>>>> detached-head

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
<<<<<<< HEAD
                    placeholder="{{ __('Password') }}"
=======
                    placeholder="{{ __('کلمه عبور') }}"
>>>>>>> detached-head
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
<<<<<<< HEAD
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
=======
                    {{ __('لفو') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('پاک کردن حساب') }}
>>>>>>> detached-head
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

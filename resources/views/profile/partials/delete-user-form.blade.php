<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('پاک کردن حساب') }}
        </h2>
        
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('پاک کردن حساب ') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('از پاک کردن حساب خود مطمئن هستید؟') }}
            </h2>

          

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('کلمه عبور') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('کلمه عبور') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('لفو') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('پاک کردن حساب') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

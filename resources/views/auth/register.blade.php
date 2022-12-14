<x-auth-layout>
    <x-auth.container>
        @slot('left')
            <img alt="Larvel Tailwind HTML Admin Template" class="w-1/2 -mt-16 -intro-x"
                src="{{ asset('dist/images/illustration.svg') }}">
            <div class="w-4/6 mt-10 text-4xl font-medium leading-tight text-white -intro-x">
                {{ __('A few more clicks to sign in to your account.') }}</div>
            <div class="mt-5 text-lg text-white -intro-x text-opacity-70 dark:text-slate-400">
                {{ __('Manage your Hospitals/Clinics in one place') }}</div>
        @endslot
        @slot('right')
            <h2 class="text-2xl font-bold text-center intro-x xl:text-3xl xl:text-left">{{ __('Sign Up') }}</h2>

            <div class="mt-2 text-center intro-x text-slate-400 xl:hidden">
                {{ __('A few more clicks to sign in to your account.') }}{{ __('Manage your Hospitals/Clinics in one place') }}
            </div>

            <div class="mt-8 intro-x">

                <!-- Validation Errors -->
                <x-errors title="We found {errors} validation error(s)" />

                <form id="login-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <x-input name="name" label="{{ __('Name') }}" type="text" required autofocus />

                    <x-input name="email" label="{{ __('Email') }}" type="email" required :show-errors="false" />

                    <x-input name="password" label="{{ __('Password') }}" type="password" required
                        autocomplete="current-password" />

                    <x-input name="password_confirmation" label="{{ __('Confirm Password') }}" type="password"
                        required :show-errors="false" />

                    <div class="flex justify-between mt-5 intro-x xl:mt-8">

                        <button class="w-full px-4 py-3 mr-auto align-top btn btn-primary xl:w-32 xl:mr-3" id="btn-login"
                            type="submit">{{ __('Sign Up') }}</button>

                        <a class="w-full px-4 py-3 mt-3 align-top btn btn-outline-secondary xl:w-40 xl:mt-0"
                            href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                    </div>

                </form>
            </div>
        @endslot
    </x-auth.container>
</x-auth-layout>

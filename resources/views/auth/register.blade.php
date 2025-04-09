@extends('layouts.app')

@section('content')
<!-- Container for the registration form -->
<div class="container mx-auto my-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="text-center text-black text-xl font-bold mb-4">{{ __('Register') }}</div>

        <!-- Registration Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name Field -->
            <div class="mb-8">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Name') }}</label>
                <input
                    id="name"
                    type="text"
                    class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md focus:border-black focus:ring-black transition @error('name') border-red-500 @enderror"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus>
                @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-8">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Email Address') }}</label>
                <input
                    id="email"
                    type="email"
                    class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md focus:border-black focus:ring-black transition @error('email') border-red-500 @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required>
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-8">
                <label for="password" class="block text-sm font-medium text-black mb-2">{{ __('Password') }}</label>
                <input
                    id="password"
                    type="password"
                    class="mt-1 block w-full px-4 py-3 border text-black border-black rounded-md focus:border-black focus:ring-black transition @error('password') border-red-500 @enderror"
                    name="password"
                    required>
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-8">
                <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Confirm Password') }}</label>
                <input
                    id="password-confirm"
                    type="password"
                    class="mt-1 block w-full px-4 py-3  text-black  border border-gray-300 rounded-md focus:border-black focus:ring-black transition"
                    name="password_confirmation"
                    required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="bg-black text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

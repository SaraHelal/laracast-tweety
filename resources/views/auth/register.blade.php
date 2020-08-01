<x-master>
<div class="container flex justify-content-center">
    <div class="mx-auto px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
                        Name
                    </label>

                    <input class="border border-grey-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           autocomplete="name"
                           value="{{ old('name')}}"
                           required>

                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="username">
                        username
                    </label>

                    <input class="border border-grey-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           autocomplete="username"
                           value="{{ old('username')}}"
                           required>

                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
                        email
                    </label>

                    <input class="border border-grey-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           autocomplete="email"
                           value="{{ old('email') }}"
                           required>

                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
                        password
                    </label>

                    <input class="border border-grey-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           autocomplete="current-password"
                           required>

                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
                        password
                    </label>

                    <input class="border border-grey-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           autocomplete="current-password"
                           required>

                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                    >
                        Submit
                    </button>
                    <a href="{{ route('password.request') }}" class="text-xs text-grey-700">Forget your password</a>

                </div>
            </form>
        </div>
    </div>
</div>
</x-master>

<x-app>
    <header class="relative mb-6">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                class="mb-2"
            >
            <img src="{{$user->avatar}}"
                 alt=""
                 class="bottom-0 rounded-full mr-2 absolute transform -translate-x-1/2 translate-y-1/2"
                 width="150"
                 style="left: 50%"
            >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div>
                <h3 class="font-bold text-2xl">{{$user->name}}</h3>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit' , $user)
                <a href="{{$user->path('edit')}}"
                        class="border border-gray-300 rounded-full text-black px-2 py-2 mr-2"
                >Edit Profile
                </a>
                @endcan
                <x-follow-button :user="$user">

                </x-follow-button>

            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>


    </header>
    @include('_timeline' , [
    'tweets' => $tweets
])
</x-app>

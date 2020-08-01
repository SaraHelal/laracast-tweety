<x-app>
    <div>
        @foreach($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center mb-5">
                <img href="{{ $user->path() }}"
                    src="{{ $user->avatar }}"
                    width="60"
                    alt="{{ $user->name }}"
                     class="mr-4 rounded"
                >
                <div>
                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                </div>
            </a>
        @endforeach

    </div>
</x-app>

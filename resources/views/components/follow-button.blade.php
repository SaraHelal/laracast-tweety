@unless(current_user()->is($user))
<form method="POST" action="{{ route('follow' , $user->username) }}">
    @csrf
    <button type="submit"
            class="bg-blue-500 rounded-full shadow px-2 py-2 text-white"
    >@if(current_user()->following($user))
            unfollow me
        @else
            follow me
        @endif
    </button>
</form>
@endunless

<form action="{{route('profile.follow', $user->name)}}" method="POST">
    @csrf
    <button type="submit"
            class="bg-blue-500 rounded-full shadow py-2 px-2 border-black-300 text-white text-xs"
    >
        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>

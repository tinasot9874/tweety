@if( @auth()->check())
    @if(current_user()->isNot($user))
        <form action="{{route('profile.follow', $user->username)}}" method="POST">
            @csrf
            <button type="submit"
                    class="bg-blue-500 rounded-full shadow py-2 px-2 border-black-300 text-white text-xs"
            >
                {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
            </button>
        </form>
    @endif
@endif

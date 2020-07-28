<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="{{$user->cover}}" class="rounded-lg" alt="">
            <img src="{{$user->avatar}}"
                 class="rounded-full absolute transform -translate-x-1/2 -translate-y-1/2"
                 width="150"
                 style="left: 50%; box-shadow: 0 8px 8px -2px #4a5568"
            >
        </div>

        <div class="flex justify-between items-center mb-4 mt-20">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @if(auth()->check())
                    @can('edit', $user)
                        <a href="{{ $user->path('edit') }}"
                           class="rounded-full shadow py-2 px-2 text-black text-xs mr-2"
                           style="box-shadow: 0 5px 5px -2px #4e555b">
                            Edit Profile
                        </a>
                    @endcan
                @endif

                <x-follow-button :user="$user">

                </x-follow-button>

            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </p>
    </header>

    @include('_timeline', [
    'tweets' => $user->tweets
    ])
</x-app>

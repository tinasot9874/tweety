<x-app>
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" class="rounded-lg" alt="">


        <div class="flex justify-between items-center mb-4 mt-10">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a href=""
                   class="rounded-full shadow py-2 px-2 text-black text-xs mr-2">
                    Edit Profile
                </a>

                <x-follow-button :user="$user">

                </x-follow-button>

            </div>
        </div>
        <img src="{{ $user->getAvatarAttribute() }}"
             class="rounded-full absolute"
             style="width: 150px; left: calc(50% - 75px); top: 150px;"
        >
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

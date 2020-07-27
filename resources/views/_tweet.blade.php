<div class="mb-8 border border-gray-300 rounded-lg">
    <div class="flex p-4 ">
        <div class="mr-2 flex-shrink-0">
            <a href="{{route('profile', $tweet->user->name)}}">
                <img src="{{ $tweet->user->getAvatarAttribute() }}"
                     alt=""
                     class="rounded-full mr-2" width="50" height="50">
            </a>

        </div>
        <div>
            <h5 class="font-bold"><a href="{{route('profile', $tweet->user->name)}}">{{ $tweet->user->name }}</a>
            </h5>
            <small>Posted {{ $tweet->created_at->diffForHumans() }}</small>
            <div class="flex my-4">
                <p class="text-sm">
                    {{ $tweet->body }}
                </p>
            </div>
        </div>


    </div>
</div>

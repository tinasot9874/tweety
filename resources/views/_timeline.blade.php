@forelse( $tweets as $tweet)
    @include('_tweet')
@empty
    <div class="mb-8 border border-gray-300 rounded-lg">
        <p class="m-5">No tweets yet!</p>
    </div>
@endforelse


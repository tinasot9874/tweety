<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="How is your day!!!"
            required
        >

        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{ auth()->user()->getAvatarAttribute() }}"
                 alt="your avatar"
                 class="rounded-full mr-2"
                 width="50" height="50"
            >
            <button
                class="bg-blue-500 rounded-lg bottom-0 shadow px-2 text-white"
                type="submit"
            >
                Tweet!!!
            </button>

        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>

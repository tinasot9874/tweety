<x-app>
    <form action="{{ $user->path() }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-800" for="name"> Name</label>
            <input class="border border-blue-400 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}">
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-800" for="name"> Username</label>
            <input class="border border-blue-400 p-2 w-full" type="text" name="username" id="username"
                   value="{{$user->username}}">
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-800" for="email"> Email</label>
            <input class="border border-blue-400 p-2 w-full" type="email" name="email" id="email"
                   value="{{$user->email}}">
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-800" for="password"> Password</label>
            <input class="border border-blue-400 p-2 w-full is-invalid" type="password" name="password" id="password"
                   required>
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-800" for="password_confirmation"> Password
                Confirmation</label>
            <input class="border border-blue-400 p-2 w-full is-invalid" type="password" name="password_confirmation"
                   id="password_confirmation" required>
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <button
            class="bg-blue-500 rounded-lg bottom-0 shadow px-4 py-2 text-white"
            type="submit"
        >
            Save
        </button>

    </form>
</x-app>

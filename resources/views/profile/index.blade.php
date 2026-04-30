<x-default-layout title="Profile" section_title="Profile">
    <div class="flex flex-col md:w-2/3 lg:w-1/2 gap-4 px-6 py-4 bg-white border border-t-4 border-zinc-300 shadow col-span-3 md:col-span-2">
        
        <div class="flex flex-col gap-2">
            <div class="font-semibold text-sm">Name</div>
            <div class="px-3 py-2 border border-zinc-300 bg-zinc-50">{{ $user->name }}</div>
        </div>

        <div class="flex flex-col gap-2">
            <div class="font-semibold text-sm">Email</div>
            <div class="px-3 py-2 border border-zinc-300 bg-zinc-50">{{ $user->email }}</div>
        </div>

        <div class="flex flex-col gap-2">
            <div class="font-semibold text-sm">Role</div>
            <div class="px-3 py-2 border border-zinc-300 bg-zinc-50 capitalize">{{ $user->role }}</div>
        </div>

        <form action="{{ route('auth.logout') }}" method="POST" class="self-end mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-50 border border-red-500 text-red-500 px-4 py-1.5 text-sm font-medium cursor-pointer hover:bg-red-500 hover:text-white transition-colors">
                Logout
            </button>
        </form>

    </div>
</x-default-layout>
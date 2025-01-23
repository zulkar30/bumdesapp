<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <div class="flex flex-col items-center">
                <!-- Foto Profil atau Avatar -->
                <div class="w-48 h-48 rounded-full bg-gray-300 dark:bg-gray-700 flex items-center justify-center text-white font-bold text-6xl">
                    @if (auth()->user()->picturePath)
                        <img src="{{ Storage::url(auth()->user()->picturePath) }}" alt="Profile Photo" class="w-full h-full rounded-full object-cover">
                    @else
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    @endif
                </div>

                <!-- Informasi Pengguna -->
                <div class="mt-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ auth()->user()->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ auth()->user()->email }}</p>
                    @if (auth()->user()->roles)
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ auth()->user()->roles }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

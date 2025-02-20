<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                
                <!-- Title -->
                <div class="mb-4">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block w-full mt-1" type="text" name="title" required autofocus />
                </div>

                <!-- Content -->
                <div class="mb-4">
                    <x-input-label for="content" :value="__('Content')" />
                    <textarea id="content" name="content" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm dark:bg-gray-700 dark:text-white" rows="4" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <x-primary-button>{{ __('Submit') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
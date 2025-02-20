<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--div class="mt-6">
                        <div class="p-4 bg-gray-100 dark:bg-gray-900 rounded-lg mb-4 shadow"-->
                            <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $post->content }}</p>
                            
                            <div class="mt-2 flex space-x-2">

                                <a href="{{ route('posts.index') }}" 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                    Back
                                </a>
                            </div>
                        <!--/div>
                    </div-->
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

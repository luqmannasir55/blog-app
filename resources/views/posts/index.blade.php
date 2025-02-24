<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="max-w-7xl mx-auto flex justify-between items-center">

                        <!-- Search Form -->
                        <form method="GET" action="{{ route('posts.index') }}" class="mb-4">
                            <x-text-input type="text" name="search" placeholder="Search posts..." value="{{ request('search') }}" />
                            <x-primary-button type="submit">Search</x-primary-button>
                        </form>

                        <a href="{{ route('posts.create') }}" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create New Post
                        </a>
                        
                    </div>

                    <div class="mt-6">
                        @foreach ($posts as $post)
                            <div class="p-4 bg-gray-100 dark:bg-gray-900 rounded-lg mb-4 shadow">
                                <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                                <p class="text-gray-600 dark:text-gray-300">{{ $post->content }}</p>
                                
                                <div class="mt-2 flex space-x-2">

                                    <a href="{{ route('posts.show', $post->id) }}" 
                                       class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">
                                        Show
                                    </a>

                                    <a href="{{ route('posts.edit', $post->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                        Edit
                                    </a>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- Pagination Links -->
                    <div class="mt-4">
                        {{ $posts->appends(request()->query())->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

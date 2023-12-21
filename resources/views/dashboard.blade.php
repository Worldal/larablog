<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">{{ __("Hey :name, bienvenu sur votre Blog 😁", [
                            "name" => Auth::user()->name,
                        ]) }}
                    </h1>
                        <br>
                    {{__("Vos articles sont répertoriés ci-dessous")}}
                </div>
            </div>
        </div>
    </div>
    <!-- Message flash -->
        @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mt-6 mb-6 text-center">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded-lg mt-6 mb-6 text-center">
                {{ session('error') }}
            </div>
        @endif
    <!-- Articles -->
@foreach ($articles as $article)
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                <p class="text-gray-700 dark:text-gray-300">{{ substr($article->content, 0, 30) }}...</p>
                <div class="text-right">
                    <a href="{{ route('articles.edit', $article->id) }}" class="text-red-500 hover:text-red-700">Modifier</a>
                    <br>
                    <a href="{{ route('articles.remove', $article->id) }}" class="text-red-500 hover:text-red-700">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
</x-app-layout>

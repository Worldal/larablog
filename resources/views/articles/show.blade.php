<x-guest-layout>


    <div class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
        {{ $article->created_at->format('d/m/Y') }} <br>Par <a href="{{ route('public.index', $article->user->id) }}">{{ $article->user->name }}</a>
    </div>
    <div class="space-y-5 xl:col-span-3">
    <div >
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $article->title }}
            </h2>
        </div>

    <div>
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <p class="text-gray-700 dark:text-gray-300">{{ $article->content }}</p>
        </div>
    </div>
        <!-- Ajout d'un commentaire -->
    <form action="{{ route('comments.store') }}" method="post" class="mt-6">
        @csrf
        <input type="hidden" name="articleId" value="{{ $article->id }}">

        <!-- Ajouter le reste de votre formulaire -->
    </form>
    </div>
</x-guest-layout>

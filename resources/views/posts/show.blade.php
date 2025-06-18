<x-layouts.app :title="$post->title">
    <div class="p-6 space-y-4">
        <h1 class="text-3xl font-bold">{{ $post->title }}</h1>

        <p class="text-gray-500 text-sm">
            Publié par {{ $post->user->name }} — {{ $post->created_at->format('d/m/Y H:i') }}
        </p>

        <div class="prose dark:prose-invert">
            {{ $post->content }}
        </div>

        <a href="{{ route('posts.index') }}" class="text-blue-500 hover:underline">&larr; Retour à la liste</a>
    </div>
</x-layouts.app>

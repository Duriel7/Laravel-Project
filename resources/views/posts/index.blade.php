<x-layouts.app :title="'Articles'">
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Liste des articles</h1>

        <ul class="space-y-4">
            @forelse($posts as $post)
                <li class="border p-4 rounded">
                    <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                    <p class="text-gray-600">{{ $post->content }}</p>
                    <p class="text-sm text-gray-400 mt-2">Publié par {{ $post->user->name }}</p>
                </li>
            @empty
                <li>Aucun article pour le moment.</li>
            @endforelse
        </ul>
    </div>
</x-layouts.app>

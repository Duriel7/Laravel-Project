<x-layouts.app :title="'Nouvel article'">
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Créer un nouvel article</h1>

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="title">Titre</label><br>
                <input type="text" id="title" name="title" class="border p-2 w-full" required>
            </div>

            <div>
                <label for="content">Contenu</label><br>
                <textarea id="content" name="content" class="border p-2 w-full h-40" required></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Publier</button>
        </form>
    </div>
</x-layouts.app>

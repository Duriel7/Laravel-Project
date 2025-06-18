{{-- This layout will show a galery with 2 lines of 4 thumbnails --}}
<x-layouts.app :title="'Photos'">
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Galerie</h1>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach(range(1, 8) as $i)
                <div class="group overflow-hidden rounded-lg shadow hover:shadow-lg cursor-pointer transition-all duration-200">
                    <img
                        src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/489830/ss_5d19c69d33abca6f6271d75f371d4241c0d6b2d1.1920x1080.jpg"
                        alt="Image {{ $i }}"
                        class="w-full h-auto transform group-hover:scale-105 transition-transform duration-300"
                        onclick="openImageModal('{{ $i }}')"
                    >
                </div>
            @endforeach
        </div>
    </div>

    {{-- Modal for full screen --}}
    <div
        id="imageModal"
        class="fixed inset-0 bg-black/80 flex items-center justify-center hidden z-50"
        onclick="closeImageModal()"
    >
        <img id="modalImage" class="w-auto max-w-full max-h-screen rounded whadow-xl" src="" alt="Image Agrandie">
    </div>

    <script>
        function openImageModal(id) {
            const modal = document.getElementById('imageModal');
            const image = document.getElementById('modalImage');
            image.src = `https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/489830/ss_5d19c69d33abca6f6271d75f371d4241c0d6b2d1.1920x1080.jpg?t=1721923149`;
            modal.classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>
</x-layouts.app>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ $profileData['name'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 text-zinc-100 min-h-screen">
    <!-- Diubah dari max-w-md menjadi max-w-4xl agar halaman lebih lebar dan muat 2 kolom dengan nyaman -->
    <div class="max-w-4xl mx-auto px-6 py-12">
        
        <!-- Hero Section -->
        <div class="items-center text-center py-12">
            <div class="w-28 h-28 mx-auto rounded-full bg-zinc-900 border-2 border-zinc-800 flex items-center justify-center mb-6 overflow-hidden shadow-lg">
                <img src="{{ asset('images/foto_profile.jpg') }}" alt="Foto Profile" class="w-full h-full object-cover">
            </div>
            <h1 class="text-3xl font-extrabold text-zinc-100 mb-2">Hi, I'm {{ $profileData['name'] }}</h1>
            <p class="text-sm font-medium text-zinc-400 mb-4">{{ $profileData['title'] }}</p>
            <p class="text-xs text-zinc-500 max-w-xs mx-auto mb-8">{{ $profileData['bio'] }}</p>
        </div>

        <!-- Skills Section -->
        <div class="py-6 border-t border-zinc-900">
            <h2 class="text-xl font-bold text-zinc-100 mb-6 text-center">My Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($profileData['skills'] as $skill)
                    <!-- Menggunakan padding p-6 dan min-h-[110px] agar kotak terlihat lebih besar dan luas -->
                    <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-2xl min-h-[110px] flex flex-col justify-center">
                        <h3 class="font-semibold text-zinc-200 text-base">{{ $skill['category'] }}</h3>
                        <p class="text-xs text-zinc-400 mt-1.5">{{ $skill['items'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Projects Section -->
        <div class="py-6 border-t border-zinc-900 mb-20">
            <h2 class="text-xl font-bold text-zinc-100 mb-6 text-center">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($profileData['projects'] as $project)
                    <!-- Tambahkan min-h-[...] atau perbesar padding-nya di sini -->
                    <div class="p-8 border border-zinc-800 rounded-lg bg-zinc-900/50 text-center flex flex-col justify-between min-h-[260px]">
                        <div>
                            <h3 class="text-xl font-bold text-white">{{ $project['title'] }}</h3>
                            <p class="text-zinc-400 mt-2 text-sm">{{ $project['description'] }}</p>
                        </div>
                        
                        <!-- Tombol diposisikan ke tengah kotak menggunakan justify-center -->
                        <div class="mt-4 flex flex-wrap justify-center gap-2">
                            @foreach($project['images'] as $image)
                                <button onclick="openModal('{{ asset('images/' . $image) }}')" 
                                        class="px-3 py-1.5 bg-zinc-800 text-white text-xs rounded hover:bg-zinc-700 transition">
                                    View Image {{ $loop->iteration }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black/80 flex items-center justify-center p-4">
            <div class="relative max-w-4xl w-full bg-zinc-900 border border-zinc-800 rounded-lg overflow-hidden p-4">
                <!-- Tombol Close -->
                <button onclick="closeModal()" class="absolute top-3 right-3 text-zinc-400 hover:text-white text-2xl font-bold z-10">&times;</button>
                
                <!-- Area Gambar -->
                <div class="flex items-center justify-center">
                    <img id="modalImage" src="" alt="Project Preview" class="max-h-[80vh] w-auto object-contain rounded">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
    }

    document.getElementById('imageModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>
</html>
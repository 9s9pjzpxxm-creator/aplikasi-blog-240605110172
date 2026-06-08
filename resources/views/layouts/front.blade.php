<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #fafbfe; /* Warna dasar sangat terang agar gradasinya menyatu */
        }
        
        /* Glassmorphism yang enteng (Tanpa animasi lag) */
        .glass-premium {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 4px 20px 0 rgba(31, 38, 135, 0.05);
        }
        
        /* Neumorphism bawaan dari kodingan Admin-mu */
        .neu-shadow {
            box-shadow: 4px 4px 8px #d1d9e6, -4px -4px 8px #ffffff;
        }
        .neu-shadow-inset {
            box-shadow: inset 4px 4px 8px #d1d9e6, inset -4px -4px 8px #ffffff;
        }
    </style>
</head>
<body class="text-gray-800 relative min-h-screen flex flex-col overflow-x-hidden">

    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-15%] left-[-10%] w-[45rem] h-[45rem] bg-purple-400/30 rounded-full filter blur-[100px]"></div>
        <div class="absolute bottom-[-15%] right-[-10%] w-[45rem] h-[45rem] bg-pink-400/30 rounded-full filter blur-[100px]"></div>
    </div>

    <header class="flex justify-between items-center px-8 py-6 border-b border-white/50 sticky top-0 z-50 glass-premium">
        <div>
            <h1 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 tracking-tight">
                MyBlog
            </h1>
            <p class="text-sm font-medium text-gray-500 mt-1">Artikel terbaru seputar teknologi dan pemrograman</p>
        </div>

        <div class="flex items-center gap-6">
            <a href="{{ route('front.index') }}" class="font-bold text-gray-600 hover:text-purple-600 transition-colors">Beranda</a>
            
            <a href="{{ url('/login') }}" class="flex items-center gap-2 px-6 py-2.5 bg-[#ecf0f3] neu-shadow rounded-full font-bold text-sm text-purple-600 hover:text-purple-700 active:neu-shadow-inset transition-all border-2 border-white/60">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                Masuk CMS
            </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto w-full px-6 py-10 flex-grow relative z-10">
        @yield('content')
    </main>

    <footer class="border-t border-white/50 text-center py-8 text-gray-500 font-medium text-sm mt-auto glass-premium relative z-10">
        <p>&copy; 2026 MyBlog. Seluruh hak cipta dilindungi.</p>
    </footer>

</body>
</html>
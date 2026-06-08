<header class="flex justify-between items-center px-8 py-6 border-b border-white/50">
    <div>
        <h1 class="text-3xl font-bold text-gray-800 tracking-tight capitalize">
            @yield('page_title', 'Dashboard')
        </h1>
        <p class="text-sm text-gray-500 mt-1">Kelola data aplikasi blog kamu di sini.</p>
    </div>

    <div class="flex items-center gap-5">
        
        <a href="{{ route('front.index') }}" target="_blank" class="flex items-center gap-2 px-6 py-2.5 bg-[#ecf0f3] neu-shadow rounded-full font-bold text-sm text-purple-600 hover:text-purple-700 active:neu-shadow-inset transition-all border-2 border-white/60">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            Pratinjau Situs
        </a>
        
        <form action="{{ route('logout') }}" method="POST" class="m-0 p-0">
            @csrf
            <button type="submit" class="flex items-center gap-2 px-6 py-2.5 bg-[#ecf0f3] neu-shadow rounded-full font-bold text-sm text-rose-500 hover:text-rose-600 active:neu-shadow-inset transition-all border-2 border-white/60 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Keluar
            </button>
        </form>

    </div>
</header>
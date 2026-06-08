@extends('layouts.front')

@section('content')
<div class="flex flex-col md:flex-row gap-8">
    
    <div class="w-full md:w-3/4 space-y-8">
        
        @forelse ($artikel as $item)
        <div class="glass-premium rounded-3xl p-6 flex flex-col sm:flex-row gap-6 hover:shadow-xl hover:shadow-purple-500/10 transition-shadow">
            @if($item->gambar)
                <img src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->judul }}" class="w-full sm:w-56 h-48 sm:h-auto object-cover rounded-2xl shrink-0">
            @endif
            <div class="flex flex-col justify-center flex-1">
                <div class="mb-3">
                    <span class="px-4 py-1.5 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 text-purple-700 text-xs font-extrabold shadow-sm">
                        {{ $item->kategori->nama_kategori ?? 'Umum' }}
                    </span>
                </div>
                <h3 class="text-2xl font-extrabold text-gray-800 mb-2 hover:text-purple-600 transition-colors tracking-tight">
                    <a href="{{ route('front.show', $item->id) }}">{{ $item->judul }}</a>
                </h3>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Oleh {{ $item->penulis->nama_depan ?? 'Admin' }} • {{ $item->created_at->format('d M Y') }}</p>
                <p class="text-gray-600 text-sm line-clamp-3 mb-6 font-medium leading-relaxed">{{ Str::limit(strip_tags($item->isi), 150) }}</p>
                <div>
                    <a href="{{ route('front.show', $item->id) }}" class="inline-flex items-center gap-2 px-6 py-2.5 bg-[#ecf0f3] neu-shadow rounded-full font-bold text-sm text-purple-600 hover:text-purple-700 active:neu-shadow-inset transition-all border-2 border-white/60 w-max">
                        Kelanjutannya &rarr;
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="glass-premium rounded-3xl p-10 text-center">
            <p class="text-gray-500 font-bold italic">Belum ada artikel yang diterbitkan.</p>
        </div>
        @endforelse
    </div>

    <div class="w-full md:w-1/4">
        <div class="glass-premium rounded-3xl p-6 sticky top-28">
            <h3 class="text-lg font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 tracking-tight mb-5 pb-4 border-b border-white/50">Kategori Artikel</h3>
            <ul class="space-y-3">
                <li>
                    <a href="{{ route('front.index') }}" class="block px-4 py-3 rounded-xl text-sm font-bold transition-all {{ !request()->has('kategori') ? 'bg-white/60 text-purple-700 neu-shadow' : 'text-gray-500 hover:bg-white/40 hover:text-purple-600' }}">
                        Semua Artikel
                    </a>
                </li>
                @foreach ($kategoriList as $kat)
                <li>
                    <a href="{{ route('front.index', ['kategori' => $kat->id]) }}" class="block px-4 py-3 rounded-xl text-sm font-bold transition-all {{ request('kategori') == $kat->id ? 'bg-white/60 text-purple-700 neu-shadow' : 'text-gray-500 hover:bg-white/40 hover:text-purple-600' }}">
                        {{ $kat->nama_kategori }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection
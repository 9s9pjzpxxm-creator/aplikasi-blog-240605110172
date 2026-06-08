@extends('layouts.front')

@section('content')
<div class="flex flex-col md:flex-row gap-8">
    
    <div class="w-full md:w-3/4">
        <div class="glass-premium rounded-3xl p-8 md:p-12">
            <div class="mb-5">
                <span class="px-4 py-1.5 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 text-purple-700 text-xs font-extrabold shadow-sm">{{ $artikel->kategori->nama_kategori ?? 'Umum' }}</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800 tracking-tight mb-6 leading-tight">{{ $artikel->judul }}</h1>
            
            <div class="flex items-center gap-4 mb-8 pb-8 border-b border-white/50">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center text-white font-extrabold text-xl shadow-sm">
                    {{ substr($artikel->penulis->nama_depan ?? 'A', 0, 1) }}
                </div>
                <div>
                    <p class="text-sm font-extrabold text-gray-800">{{ $artikel->penulis->nama_depan ?? 'Admin' }}</p>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-0.5">{{ $artikel->created_at->format('d M Y H:i') }} WIB</p>
                </div>
            </div>
            
            @if($artikel->gambar)
                <img src="{{ asset('storage/'.$artikel->gambar) }}" alt="{{ $artikel->judul }}" class="w-full rounded-[2rem] mb-10 object-cover max-h-[500px] shadow-sm">
            @endif

            <div class="prose max-w-none text-gray-700 leading-relaxed font-medium prose-headings:font-extrabold prose-headings:text-gray-800 prose-a:text-purple-600">
                {!! $artikel->isi !!}
            </div>

            <div class="mt-14 pt-8 border-t border-white/50">
                <a href="{{ route('front.index') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-[#ecf0f3] neu-shadow rounded-full font-bold text-sm text-gray-600 hover:text-purple-600 active:neu-shadow-inset transition-all border-2 border-white/60">
                    &larr; Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/4">
        <div class="glass-premium rounded-3xl p-6 sticky top-28">
            <h3 class="text-lg font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 tracking-tight mb-5 pb-4 border-b border-white/50">Artikel Terkait</h3>
            
            @if($artikelTerkait->count() > 0)
                <ul class="space-y-4">
                    @foreach ($artikelTerkait as $terkait)
                    <li>
                        <a href="{{ route('front.show', $terkait->id) }}" class="group flex gap-4 items-start p-3 -m-3 rounded-2xl hover:bg-white/40 transition-colors border border-transparent hover:border-white/50">
                            @if($terkait->gambar)
                                <img src="{{ asset('storage/'.$terkait->gambar) }}" alt="{{ $terkait->judul }}" class="w-16 h-16 object-cover rounded-xl shrink-0 shadow-sm">
                            @else
                                <div class="w-16 h-16 bg-white/50 rounded-xl flex items-center justify-center text-purple-300 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div>
                                <h4 class="font-extrabold text-gray-700 text-sm group-hover:text-purple-600 transition-colors line-clamp-2 leading-snug">{{ $terkait->judul }}</h4>
                                <p class="text-[11px] text-gray-400 font-bold uppercase tracking-widest mt-1.5">{{ $terkait->created_at->format('d M Y') }}</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            @else
                <p class="text-sm text-gray-500 font-medium italic">Belum ada artikel terkait.</p>
            @endif
        </div>
    </div>

</div>
@endsection
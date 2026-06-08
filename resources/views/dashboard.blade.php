<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Laravel Interface</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Neumorphism Shadow */@extends('layouts.app')

@section('title', 'Dashboard - BlogApp')
@section('page_title', 'Dashboard Overview')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        
        <div class="glass-premium p-6 rounded-3xl flex items-center gap-5 transition-transform duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20 animate-fade-up">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center shadow-lg shadow-purple-500/40 shrink-0">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-indigo-900/60 font-extrabold uppercase tracking-widest">Total Artikel</p>
                <h3 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 mt-1">{{ $totalArtikel }}</h3>
            </div>
        </div>

        <div class="glass-premium p-6 rounded-3xl flex items-center gap-5 transition-transform duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20 animate-fade-up animation-delay-200">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#38bdf8] to-[#0ea5e9] text-white flex items-center justify-center shadow-lg shadow-sky-500/40 shrink-0">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-indigo-900/60 font-extrabold uppercase tracking-widest">Penulis Aktif</p>
                <h3 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 mt-1">{{ $totalPenulis }}</h3>
            </div>
        </div>

        <div class="glass-premium p-6 rounded-3xl flex items-center gap-5 transition-transform duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-pink-500/20 animate-fade-up animation-delay-400">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#fb7185] to-[#f43f5e] text-white flex items-center justify-center shadow-lg shadow-rose-500/40 shrink-0">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-indigo-900/60 font-extrabold uppercase tracking-widest">Kategori</p>
                <h3 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 mt-1">{{ $totalKategori }}</h3>
            </div>
        </div>
    </div>

    <div class="glass-premium rounded-[2.5rem] p-8 md:p-10 animate-fade-up animation-delay-400">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <h2 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 tracking-tight">Artikel Terbaru</h2>
            <a href="{{ route('artikel.index') }}" class="text-purple-700 font-extrabold text-sm hover:text-indigo-900 transition-colors flex items-center
        .neu-shadow {
            box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #ffffff;
        }
        .neu-shadow-inset {
            box-shadow: inset 6px 6px 12px #d1d9e6, inset -6px -6px 12px #ffffff;
        }
    </style>
</head>
<body class="min-h-screen bg-[#ecf0f3] font-sans relative overflow-hidden flex items-center justify-center p-6">
    
    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-gradient-to-br from-pink-400 to-orange-400 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>

    <div class="relative w-full max-w-5xl rounded-3xl neu-shadow bg-white/40 backdrop-blur-xl border border-white/60 p-10 z-10">
        
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 tracking-tight">Dashboard</h1>
                <p class="text-gray-500 mt-1 text-sm font-medium">Welcome back, let's build something awesome.</p>
            </div>
            
            <div class="h-12 w-12 rounded-full neu-shadow bg-[#ecf0f3] flex items-center justify-center cursor-pointer transition-transform duration-300 hover:scale-105">
                <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600">M</span>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white/50 backdrop-blur-md rounded-2xl p-6 border border-white/50 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)]">
                <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-400 text-white flex items-center justify-center mb-4 shadow-lg shadow-blue-500/30">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-gray-800">Fast Performance</h2>
                <p class="text-sm text-gray-500 mt-2 leading-relaxed">Optimized routing and controllers for seamless user experience.</p>
            </div>

            <div class="neu-shadow rounded-2xl p-6 bg-[#ecf0f3] transition-all duration-300 hover:shadow-none hover:neu-shadow-inset cursor-pointer group">
                <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 text-white flex items-center justify-center mb-4 shadow-lg shadow-purple-500/30 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h2 class="text-lg font-bold text-gray-800">Secure Logic</h2>
                <p class="text-sm text-gray-500 mt-2 leading-relaxed">Robust middleware and authentication integrated seamlessly.</p>
            </div>

            <div class="bg-white/50 backdrop-blur-md rounded-2xl p-6 border border-white/50 flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Ready to Deploy?</h2>
                    <p class="text-sm text-gray-500">Push your latest changes to the production server.</p>
                </div>
                <button class="mt-6 w-full py-3 rounded-xl font-semibold text-white bg-gradient
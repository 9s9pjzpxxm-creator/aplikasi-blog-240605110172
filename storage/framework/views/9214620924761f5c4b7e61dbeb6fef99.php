<?php $__env->startSection('title', 'Dashboard - Aditya\'s Web'); ?>
<?php $__env->startSection('page_title', 'Dashboard Overview'); ?>

<?php $__env->startSection('content'); ?>
<style>
    /* CSS Animasi Khusus Konten Dashboard */
    .animate-fade-up { animation: fadeInUp 0.6s ease-out forwards; opacity: 0; }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animation-delay-200 { animation-delay: 0.15s; }
    .animation-delay-400 { animation-delay: 0.3s; }
    
    .glass-premium {
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 4px 20px 0 rgba(31, 38, 135, 0.05);
    }
</style>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
    
    <div class="glass-premium p-6 rounded-3xl flex items-center gap-5 transition-transform duration-500 hover:-translate-y-2 hover:shadow-xl hover:shadow-purple-500/20 animate-fade-up">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center shadow-lg shadow-purple-500/40 shrink-0">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
        </div>
        <div>
            <p class="text-xs text-indigo-900/60 font-extrabold uppercase tracking-widest">Total Artikel</p>
            <h3 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 mt-1"><?php echo e($totalArtikel ?? 5); ?></h3>
        </div>
    </div>

    <div class="glass-premium p-6 rounded-3xl flex items-center gap-5 transition-transform duration-500 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 animate-fade-up animation-delay-200">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#38bdf8] to-[#0ea5e9] text-white flex items-center justify-center shadow-lg shadow-sky-500/40 shrink-0">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
        </div>
        <div>
            <p class="text-xs text-indigo-900/60 font-extrabold uppercase tracking-widest">Penulis Aktif</p>
            <h3 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 mt-1"><?php echo e($totalPenulis ?? 2); ?></h3>
        </div>
    </div>

    <div class="glass-premium p-6 rounded-3xl flex items-center gap-5 transition-transform duration-500 hover:-translate-y-2 hover:shadow-xl hover:shadow-pink-500/20 animate-fade-up animation-delay-400">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-[#fb7185] to-[#f43f5e] text-white flex items-center justify-center shadow-lg shadow-rose-500/40 shrink-0">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
        </div>
        <div>
            <p class="text-xs text-indigo-900/60 font-extrabold uppercase tracking-widest">Kategori</p>
            <h3 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 mt-1"><?php echo e($totalKategori ?? 4); ?></h3>
        </div>
    </div>
</div>

<div class="glass-premium rounded-[2.5rem] p-8 md:p-10 animate-fade-up animation-delay-400">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
        <h2 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 tracking-tight">Artikel Terbaru</h2>
        <a href="<?php echo e(route('artikel.index')); ?>" class="text-purple-700 font-extrabold text-sm hover:text-indigo-900 transition-colors flex items-center gap-1">
            Lihat Semua <span class="text-lg leading-none">&rarr;</span>
        </a>
    </div>
    
    <div class="overflow-x-auto pb-4">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="text-indigo-900/50 text-[11px] uppercase tracking-widest border-b border-white/50">
                    <th class="pb-4 font-extrabold px-4">Judul Artikel</th>
                    <th class="pb-4 font-extrabold px-4">Kategori</th>
                    <th class="pb-4 font-extrabold px-4">Status</th>
                    <th class="pb-4 font-extrabold px-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-indigo-900/80 text-sm font-medium">
                <?php $__empty_1 = true; $__currentLoopData = $artikelTerbaru ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-b border-white/30 hover:bg-white/40 transition-colors duration-300">
                    <td class="py-4 px-4 font-extrabold text-indigo-950"><?php echo e($artikel->judul); ?></td>
                    <td class="py-4 px-4">
                        <span class="px-4 py-1.5 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 text-purple-700 text-xs font-extrabold shadow-sm">
                            <?php echo e($artikel->kategori->nama_kategori ?? 'Folklore'); ?>

                        </span>
                    </td>
                    <td class="py-4 px-4">
                        <span class="px-4 py-1.5 rounded-full shadow-sm <?php echo e(($artikel->status ?? 'Published') == 'Published' ? 'bg-emerald-100/80 text-emerald-700' : 'bg-amber-100/80 text-amber-700'); ?> text-xs font-extrabold flex items-center gap-2 w-max">
                            <span class="w-2 h-2 rounded-full <?php echo e(($artikel->status ?? 'Published') == 'Published' ? 'bg-emerald-500' : 'bg-amber-500'); ?>"></span>
                            <?php echo e($artikel->status ?? 'Published'); ?>

                        </span>
                    </td>
                    <td class="py-4 px-4 text-right">
                        <a href="<?php echo e(route('artikel.edit', $artikel->id ?? 1)); ?>" class="text-purple-600 hover:text-purple-900 font-extrabold transition-colors px-3 py-1.5 rounded-lg hover:bg-purple-100/50">Edit</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="py-10 text-center text-indigo-900/50 font-bold italic">Belum ada artikel yang diukir.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/dashboard/index.blade.php ENDPATH**/ ?>
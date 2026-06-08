<?php $__env->startSection('content'); ?>
<div class="flex flex-col md:flex-row gap-8">
    
    <div class="w-full md:w-3/4 space-y-8">
        
        <?php $__empty_1 = true; $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="glass-premium rounded-3xl p-6 flex flex-col sm:flex-row gap-6 hover:shadow-xl hover:shadow-purple-500/10 transition-shadow">
            <?php if($item->gambar): ?>
                <img src="<?php echo e(asset('storage/'.$item->gambar)); ?>" alt="<?php echo e($item->judul); ?>" class="w-full sm:w-56 h-48 sm:h-auto object-cover rounded-2xl shrink-0">
            <?php endif; ?>
            <div class="flex flex-col justify-center flex-1">
                <div class="mb-3">
                    <span class="px-4 py-1.5 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 text-purple-700 text-xs font-extrabold shadow-sm">
                        <?php echo e($item->kategori->nama_kategori ?? 'Umum'); ?>

                    </span>
                </div>
                <h3 class="text-2xl font-extrabold text-gray-800 mb-2 hover:text-purple-600 transition-colors tracking-tight">
                    <a href="<?php echo e(route('front.show', $item->id)); ?>"><?php echo e($item->judul); ?></a>
                </h3>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Oleh <?php echo e($item->penulis->nama_depan ?? 'Admin'); ?> • <?php echo e($item->created_at->format('d M Y')); ?></p>
                <p class="text-gray-600 text-sm line-clamp-3 mb-6 font-medium leading-relaxed"><?php echo e(Str::limit(strip_tags($item->isi), 150)); ?></p>
                <div>
                    <a href="<?php echo e(route('front.show', $item->id)); ?>" class="inline-flex items-center gap-2 px-6 py-2.5 bg-[#ecf0f3] neu-shadow rounded-full font-bold text-sm text-purple-600 hover:text-purple-700 active:neu-shadow-inset transition-all border-2 border-white/60 w-max">
                        Kelanjutannya &rarr;
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="glass-premium rounded-3xl p-10 text-center">
            <p class="text-gray-500 font-bold italic">Belum ada artikel yang diterbitkan.</p>
        </div>
        <?php endif; ?>
    </div>

    <div class="w-full md:w-1/4">
        <div class="glass-premium rounded-3xl p-6 sticky top-28">
            <h3 class="text-lg font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 tracking-tight mb-5 pb-4 border-b border-white/50">Kategori Artikel</h3>
            <ul class="space-y-3">
                <li>
                    <a href="<?php echo e(route('front.index')); ?>" class="block px-4 py-3 rounded-xl text-sm font-bold transition-all <?php echo e(!request()->has('kategori') ? 'bg-white/60 text-purple-700 neu-shadow' : 'text-gray-500 hover:bg-white/40 hover:text-purple-600'); ?>">
                        Semua Artikel
                    </a>
                </li>
                <?php $__currentLoopData = $kategoriList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('front.index', ['kategori' => $kat->id])); ?>" class="block px-4 py-3 rounded-xl text-sm font-bold transition-all <?php echo e(request('kategori') == $kat->id ? 'bg-white/60 text-purple-700 neu-shadow' : 'text-gray-500 hover:bg-white/40 hover:text-purple-600'); ?>">
                        <?php echo e($kat->nama_kategori); ?>

                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/front/index.blade.php ENDPATH**/ ?>
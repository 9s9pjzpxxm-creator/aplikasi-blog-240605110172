<?php $__env->startSection('content'); ?>
<div class="flex flex-col md:flex-row gap-8">
    
    <div class="w-full md:w-3/4">
        <div class="glass-premium rounded-3xl p-8 md:p-12">
            <div class="mb-5">
                <span class="px-4 py-1.5 rounded-full bg-gradient-to-r from-purple-100 to-indigo-100 text-purple-700 text-xs font-extrabold shadow-sm"><?php echo e($artikel->kategori->nama_kategori ?? 'Umum'); ?></span>
            </div>
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800 tracking-tight mb-6 leading-tight"><?php echo e($artikel->judul); ?></h1>
            
            <div class="flex items-center gap-4 mb-8 pb-8 border-b border-white/50">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center text-white font-extrabold text-xl shadow-sm">
                    <?php echo e(substr($artikel->penulis->nama_depan ?? 'A', 0, 1)); ?>

                </div>
                <div>
                    <p class="text-sm font-extrabold text-gray-800"><?php echo e($artikel->penulis->nama_depan ?? 'Admin'); ?></p>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-0.5"><?php echo e($artikel->created_at->format('d M Y H:i')); ?> WIB</p>
                </div>
            </div>
            
            <?php if($artikel->gambar): ?>
                <img src="<?php echo e(asset('storage/'.$artikel->gambar)); ?>" alt="<?php echo e($artikel->judul); ?>" class="w-full rounded-[2rem] mb-10 object-cover max-h-[500px] shadow-sm">
            <?php endif; ?>

            <div class="prose max-w-none text-gray-700 leading-relaxed font-medium prose-headings:font-extrabold prose-headings:text-gray-800 prose-a:text-purple-600">
                <?php echo $artikel->isi; ?>

            </div>

            <div class="mt-14 pt-8 border-t border-white/50">
                <a href="<?php echo e(route('front.index')); ?>" class="inline-flex items-center gap-2 px-6 py-3 bg-[#ecf0f3] neu-shadow rounded-full font-bold text-sm text-gray-600 hover:text-purple-600 active:neu-shadow-inset transition-all border-2 border-white/60">
                    &larr; Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/4">
        <div class="glass-premium rounded-3xl p-6 sticky top-28">
            <h3 class="text-lg font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-900 to-purple-800 tracking-tight mb-5 pb-4 border-b border-white/50">Artikel Terkait</h3>
            
            <?php if($artikelTerkait->count() > 0): ?>
                <ul class="space-y-4">
                    <?php $__currentLoopData = $artikelTerkait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $terkait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('front.show', $terkait->id)); ?>" class="group flex gap-4 items-start p-3 -m-3 rounded-2xl hover:bg-white/40 transition-colors border border-transparent hover:border-white/50">
                            <?php if($terkait->gambar): ?>
                                <img src="<?php echo e(asset('storage/'.$terkait->gambar)); ?>" alt="<?php echo e($terkait->judul); ?>" class="w-16 h-16 object-cover rounded-xl shrink-0 shadow-sm">
                            <?php else: ?>
                                <div class="w-16 h-16 bg-white/50 rounded-xl flex items-center justify-center text-purple-300 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            <?php endif; ?>
                            <div>
                                <h4 class="font-extrabold text-gray-700 text-sm group-hover:text-purple-600 transition-colors line-clamp-2 leading-snug"><?php echo e($terkait->judul); ?></h4>
                                <p class="text-[11px] text-gray-400 font-bold uppercase tracking-widest mt-1.5"><?php echo e($terkait->created_at->format('d M Y')); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <p class="text-sm text-gray-500 font-medium italic">Belum ada artikel terkait.</p>
            <?php endif; ?>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/front/show.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Edit Artikel'); ?>
<?php $__env->startSection('page_title', 'Edit Data Artikel'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto p-6">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Edit Artikel</h1>
        <p class="text-gray-500">Perbarui konten dan informasi artikelmu di sini.</p>
    </div>

    <div class="glass rounded-3xl p-8 shadow-xl bg-white/50 backdrop-blur-lg">
        <form action="<?php echo e(route('artikel.update', $artikel->id)); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Artikel</label>
                <input type="text" name="judul" value="<?php echo e(old('judul', $artikel->judul)); ?>" 
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:outline-none transition-all" required>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Penulis</label>
                    <select name="penulis_id" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                        <?php $__currentLoopData = $penulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>" <?php echo e($artikel->penulis_id == $p->id ? 'selected' : ''); ?>>
                                <?php echo e($p->nama_depan); ?> <?php echo e($p->nama_belakang); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                    <select name="kategori_id" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:outline-none">
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($k->id); ?>" <?php echo e($artikel->kategori_id == $k->id ? 'selected' : ''); ?>>
                                <?php echo e($k->nama_kategori); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Isi Artikel</label>
                <textarea name="isi" rows="8" 
                          class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:outline-none transition-all" required><?php echo e(old('isi', $artikel->isi)); ?></textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Ganti Gambar (Opsional)</label>
                <?php if($artikel->gambar): ?>
                    <div class="mb-4">
                        <p class="text-xs text-gray-400 mb-2">Gambar saat ini:</p>
                        <img src="<?php echo e(asset('storage/'.$artikel->gambar)); ?>" class="w-32 h-32 rounded-xl object-cover shadow-sm">
                    </div>
                <?php endif; ?>
                <input type="file" name="gambar" 
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            <div class="flex justify-end gap-4 pt-4 border-t border-gray-100">
                <a href="<?php echo e(route('artikel.index')); ?>" 
                   class="px-6 py-3 rounded-xl text-gray-600 font-semibold hover:bg-gray-100 transition-all">
                    Batal
                </a>
                <button type="submit" 
                        class="px-8 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold shadow-lg shadow-purple-500/30 hover:shadow-purple-500/50 transition-all">
                    Update Artikel
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/artikel/edit.blade.php ENDPATH**/ ?>
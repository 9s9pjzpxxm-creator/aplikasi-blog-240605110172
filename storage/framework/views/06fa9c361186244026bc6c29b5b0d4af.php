<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('page_title', 'Data Kategori'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-6">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Data Kategori</h1>
        <a href="<?php echo e(route('kategori.create')); ?>" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-purple-500/30 hover:shadow-purple-500/50 transition-all">
            + Tambah Kategori
        </a>
    </div>

    <div class="glass rounded-3xl p-8 shadow-xl bg-white/50 backdrop-blur-lg">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-gray-400 text-sm border-b border-gray-200/50">
                        <th class="pb-4 font-semibold px-2">ID</th>
                        <th class="pb-4 font-semibold px-2">Nama Kategori</th>
                        <th class="pb-4 font-semibold px-2">Keterangan</th>
                        <th class="pb-4 font-semibold px-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b border-gray-200/30 hover:bg-white/40 transition-colors">
                        <td class="py-4 px-2"><?php echo e($k->id); ?></td>
                        <td class="py-4 px-2 font-medium text-gray-800"><?php echo e($k->nama_kategori); ?></td>
                        <td class="py-4 px-2"><?php echo e($k->keterangan); ?></td>
                        <td class="py-4 px-2 flex gap-3">
                            <a href="<?php echo e(route('kategori.edit', $k->id)); ?>" class="text-purple-600 hover:text-purple-800 font-semibold">Edit</a>
                            <form action="<?php echo e(route('kategori.destroy', $k->id)); ?>" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/kategori/index.blade.php ENDPATH**/ ?>
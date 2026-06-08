<?php $__env->startSection('title', 'Artikel'); ?>
<?php $__env->startSection('page_title', 'Data Artikel'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-6">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Data Artikel</h1>
        <a href="<?php echo e(route('artikel.create')); ?>" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-purple-500/30 hover:shadow-purple-500/50 transition-all">
            + Tambah Artikel
        </a>
    </div>

    <div class="glass rounded-3xl p-8 shadow-xl w-full bg-white/50 backdrop-blur-lg">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse table-fixed min-w-[900px]">
                <thead>
                    <tr class="text-gray-400 text-sm border-b border-gray-200/50">
                        <th class="pb-6 w-12 text-center font-semibold">ID</th>
                        <th class="pb-6 w-20 font-semibold">Gambar</th>
                        <th class="pb-6 w-1/3 font-semibold">Judul</th>
                        <th class="pb-6 w-1/5 font-semibold">Penulis</th>
                        <th class="pb-6 w-1/6 font-semibold">Kategori</th>
                        <th class="pb-6 w-24 font-semibold">Tanggal</th>
                        <th class="pb-6 w-40 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b border-gray-200/30 hover:bg-white/40 transition-colors h-24">
                        <td class="text-center font-medium"><?php echo e($item->id); ?></td>
                        <td>
                            <div class="w-14 h-14 rounded-xl overflow-hidden shadow-sm">
                                <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" class="w-full h-full object-cover">
                            </div>
                        </td>
                        <td class="font-medium text-gray-800 truncate pr-4"><?php echo e($item->judul); ?></td>
                        <td class="truncate pr-4 font-medium text-gray-800">
                             <?php if($item->penulis): ?>
                                <?php echo e($item->penulis->nama_depan); ?> <?php echo e($item->penulis->nama_belakang); ?>

                             <?php else: ?>
                                <span class="text-gray-400 italic">No Author</span>
                             <?php endif; ?>
                        </td>
                        <td class="truncate pr-4"><?php echo e($item->kategori->nama_kategori ?? 'N/A'); ?></td>
                        
                        <td class="pr-4">
                            <?php if($item->created_at): ?>
                                <?php echo e(\Carbon\Carbon::parse($item->created_at)->format('d M Y')); ?>

                            <?php else: ?>
                              <span class="text-gray-400 italic">No Date</span>
                            <?php endif; ?>
                        </td>
                        
                        <td class="w-40">
                            <div class="flex gap-3 items-center">
                                <a href="<?php echo e(route('artikel.show', $item->id)); ?>" class="text-blue-600 hover:text-blue-800 font-bold">Lihat</a>
                                <a href="<?php echo e(route('artikel.edit', $item->id)); ?>" class="text-purple-600 hover:text-purple-800 font-bold">Edit</a>
                                <form action="<?php echo e(route('artikel.destroy', $item->id)); ?>" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-bold">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/artikel/index.blade.php ENDPATH**/ ?>
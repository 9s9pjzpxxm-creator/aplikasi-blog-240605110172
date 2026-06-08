<?php $__env->startSection('title', 'Penulis'); ?>
<?php $__env->startSection('page_title', 'Data Penulis'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-6">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Data Penulis</h1>
        <a href="<?php echo e(route('penulis.create')); ?>" 
           class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-purple-500/30 hover:shadow-purple-500/50 transition-all">
            + Tambah Penulis
        </a>
    </div>

    <div class="glass rounded-3xl p-8 shadow-xl bg-white/50 backdrop-blur-lg">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse table-fixed min-w-[900px]">
                <thead>
                    <tr class="text-gray-400 text-sm border-b border-gray-200/50">
                        <th class="pb-6 w-16 text-center font-semibold">ID</th>
                        <th class="pb-6 w-24 font-semibold">Foto</th>
                        <th class="pb-6 w-1/5 font-semibold">Nama Depan</th>
                        <th class="pb-6 w-1/5 font-semibold">Nama Belakang</th>
                        <th class="pb-6 w-1/5 font-semibold">Username</th>
                        <th class="pb-6 w-32 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    <?php $__currentLoopData = $penulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b border-gray-200/30 hover:bg-white/40 transition-colors h-24">
                        <td class="text-center font-medium"><?php echo e($p->id); ?></td>
                        <td>
                            <div class="w-14 h-14 rounded-full overflow-hidden shadow-sm border border-white">
                                <?php if($p->foto): ?>
                                    <img src="<?php echo e(asset('storage/' . $p->foto)); ?>" class="w-full h-full object-cover">
                                <?php else: ?>
                                    <div class="w-full h-full bg-gray-200 flex items-center justify-center text-[10px] text-gray-400">N/A</div>
                                <?php endif; ?>
                            </div>
                        </td>
                        <td class="font-medium text-gray-800 truncate pr-4"><?php echo e($p->nama_depan); ?></td>
                        <td class="truncate pr-4"><?php echo e($p->nama_belakang); ?></td>
                        <td class="truncate pr-4"><?php echo e($p->user_name); ?></td>
                        <td>
                            <div class="flex gap-4 items-center">
                                <a href="<?php echo e(route('penulis.edit', $p->id)); ?>" class="text-purple-600 hover:text-purple-800 font-bold">Edit</a>
                                <form action="<?php echo e(route('penulis.destroy', $p->id)); ?>" method="POST" onsubmit="return confirm('Hapus penulis ini?')">
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/penulis/index.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Modern Laravel App'); ?></title>
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="min-h-screen font-sans text-gray-800 bg-gray-50 overflow-hidden">
    
    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-gradient-to-br from-pink-400 to-orange-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000 pointer-events-none"></div>

    <div class="flex h-screen relative z-10 p-4 gap-6">
        
        <div class="w-64 flex-shrink-0">
            <?php echo $__env->make('components.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="flex-1 flex flex-col glass rounded-3xl overflow-hidden neu-shadow min-w-0">
            
            <?php echo $__env->make('components.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <main class="flex-1 overflow-y-auto p-8">
                <?php echo $__env->yieldContent('content'); ?>
            </main>

        </div>
    </div>

</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/layouts/app.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aditya'sWeb</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass { background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-100 via-purple-50 to-pink-100 min-h-screen flex items-center justify-center p-6">

    <div class="glass w-full max-w-md rounded-3xl p-10 shadow-2xl border border-white/50">
        <?php if(session('error')): ?>
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-xl text-sm font-medium">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Selamat Datang</h1>
            <p class="text-gray-500 mt-2">Silakan masuk ke akun kamu</p>
        </div>

        <form action="<?php echo e(route('login')); ?>" method="POST" class="space-y-6">
            <?php echo csrf_field(); ?>
            
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
                <input type="text" name="user_name" required 
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                <input type="password" name="password" required 
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-purple-500 focus:outline-none transition-all">
            </div>

            <button type="submit" 
                    class="w-full py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-purple-500/30 hover:shadow-purple-500/50 transition-all">
                Masuk
            </button>
        </form>

        <p class="text-center text-gray-400 text-sm mt-8">
            Aditya'sWeb CMS © 2026
        </p>
    </div>

</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aplikasi-blog/resources/views/login.blade.php ENDPATH**/ ?>
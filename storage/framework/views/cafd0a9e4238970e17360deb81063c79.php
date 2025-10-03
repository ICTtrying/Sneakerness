<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 dark:bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'My App'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
  

        
        <header class="relative bg-white shadow-sm dark:bg-gray-800 dark:shadow-none">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo e($heading ?? ''); ?></h1>
            </div>
        </header>

        
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <?php echo e($slot); ?>

            </div>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\yassi\Herd\sneakerness\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
</head>
<body>
    
    <div class="container my-5">
        <h1><?php echo e($title); ?></h1>
         <p><?php echo e($message); ?></p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Omschrijving</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $allergenen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allergeen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($allergeen->Naam); ?></td>
                    <td><?php echo e($allergeen->Omschrijving); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3">Geen allergenen gevonden.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    </div>
</body>
</html>

<?php /**PATH C:\phpprojects\Sneakerness\sneakerness-app\stands-overzicht\resources\views/welcome.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title', 'Quadro Kanban'); ?>
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guira</title>
    <link rel="stylesheet" href="../css/workspace.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="main">
        <h2>Meus projetos</h2>
        <div class="projects">
        <?php $__currentLoopData = $workspaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workspace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cards">
                <div class="card_box">
                    <div class="init_card">
                        <img src="img/logo_workspace2.png" class="img">
                        <a href="/kanban/<?php echo e($workspace->id); ?>"><p class="title_workspace"><?php echo e($workspace->title); ?></p></a>
                    </div>
                    <div class="middle_card">
                        <div class="text_card">FILAS RECENTES</div>
                        <div class="text_card2">Tudo aberto: (<?php echo e($qtd_workspace[$workspace->id - 1]); ?>)</div>
                    </div>
                    <hr>
                    <p id="participants">Participantes: (2)</p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div id="more_info">
            <p>Atribuidos a você:</p>
            <hr>
            <div class="card_list">
            <?php $__currentLoopData = $myCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myCard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card_row">
                    <img src="img/logo_workspace2.png" class="img2">
                    <div class="content">
                            <a href="/details/<?php echo e($myCard->id); ?>"><p><?php echo e($myCard->title); ?></p></a>
                        
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Guilherme\Desktop\kanban_laravel\kanban\resources\views/workspace.blade.php ENDPATH**/ ?>
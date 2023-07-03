<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <!-- Menu -->
    <div class="menu">
        <div id="title_menu" class="space_menu">
            <a href="/workspace"><span id="title"><?php echo $__env->yieldContent('title'); ?></span></a>
        </div>
        <div class="opcoes space_buttons_menu">
        <button id="create_modal" class="btn" onclick="open_modal()">Criar</button>
        <button id="create_workspace" class="btn" onclick="open_modal2()">Novo Workspace</button> 
        </div>
    </div>

    <!-- Card of create -->
<form action="/create" method="POST">
<?php echo e(csrf_field()); ?>

<dialog id="modal">
    <div id="header_modal">
        <h3 id="title_card">Criar card</h3>
    </div>
    <div id="content_modal">
        <label class="espace_label">Resumo</label>
        <input type="name" id="title_modal" name="title" required>
        <label class="espace_label">Descrição</label>
        <textarea id="description_modal" name="description" required></textarea>
        <div id="all_selects">
            <div class="selects">
                <label class="espace_label">Tipo de card</label>
                <select class="select_modal" class='selectModal' name="type">
                    <option value="dev">Desenvolvimento</option>
                    <option value="correction">Correção</option>
                    <option value="test">Testar</option>
                </select>
            </div>
            <div class="selects">
                <label class="espace_label">Responsável</label>
                <select class="select_modal" class='selectModal' name="author">
                    <option value="guilherme">Guilherme</option>
                    <option value="wesley">Wesley</option>
                </select>
            </div>
            <div class="selects">
            <label class="espace_label">Workspace</label>
            <select class="select_modal" class='selectModal' name="workspace">
                <?php $__currentLoopData = $workspaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workspace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($workspace->id); ?>"><?php echo e($workspace->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>
        </div>
    </div>
    <input type="submit" value="Criar" class="btn" id="create_card">
    <button class="btn" onclick="close_modal()">Cancelar</button>
</dialog>
</form>

<!-- Card of create Workspace -->
<form action="/create/workspace" method="POST">
<?php echo e(csrf_field()); ?>

<dialog id="modal_workspace">
    <div id="header_modal">
        <h3 id="title_card">Criar Workspace</h3>
    </div>
    <div id="content_modal">
        <label class="espace_label">Nome</label>
        <input type="name" id="title_modal" name="title" required>
        <label class="espace_label">Descrição</label>
        <textarea id="description_modal" name="description" required></textarea>
    </div>
    <input type="submit" value="Criar" class="btn_modal" id="create_card">
    <button class="btn_modal" onclick="close_modal()">Cancelar</button>
</dialog>
</form>
    
    <?php echo $__env->yieldContent('content'); ?>
<?php /**PATH C:\Users\Guilherme\Desktop\kanban_laravel\kanban\resources\views/layouts/header.blade.php ENDPATH**/ ?>
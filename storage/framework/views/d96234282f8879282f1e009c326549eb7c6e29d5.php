<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canban</title>
    <link rel="stylesheet" href="/css/index.css">
    <script src="/js/script.js"></script>
</head>
<body>
<?php if(session('msg')): ?>
    <p class="msg"><?php echo e(session('msg')); ?></p>
<?php endif; ?>
<div class="menu">
    <div id="title_menu" class="space_menu">
        <a href="/workspace"><span id="title"> Quadro Kanban </span></a>
    </div>
    <div class="opcoes space_buttons_menu">
        <button id="create_modal" class="btn" onclick="open_modal()">Criar</button>     
        <button id="create_workspace" class="btn" onclick="open_modal2()">Novo Workspace</button> 
    </div>
</div>
<div id="second_menu">
    <div id="compact_menu">
        <div id="title1">
            <span>Backlog (<?php echo e($qtd_card1); ?>)</span>
        </div>
        <div id="title2">
            <span>Em análise (<?php echo e($qtd_card2); ?>)</span>
        </div>
        <div id="title3">
            <span>Em desenvolvimento (<?php echo e($qtd_card3); ?>)</span>
        </div>
        <div id="title4">
            <span>Em teste (<?php echo e($qtd_card4); ?>)</span>
        </div>
        <div id="title5">
            <span>Finalizado (<?php echo e($qtd_card5); ?>)</span>
        </div>
    </div>
</div>
<div class="container">
    <div id="content">
        <div id="column1">
        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($card->status_id == 1 AND $card->workspace_id == $id_workspace): ?>
                <div class="card">
                    <div class="cor_lateral"></div>
                    <div class="card-body">
                        <a href="/details/<?php echo e($card->id); ?>"><h4 class="card-title"><?php echo e($card->title); ?></h4></a>
                        <p class="card-text"><?php echo e($card->description); ?></p>
                        <p><img src='/img/<?php echo e($card->type); ?>.png' class="logo_card"></p>
                    </div>
                </div>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div id="column2">
        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($card->status_id == 2 AND $card->workspace_id == $id_workspace): ?>
                <div class="card">
                    <div class="cor_lateral"></div>
                    <div class="card-body">
                        <div><a href="/details/<?php echo e($card->id); ?>"><h4 class="card-title"><?php echo e($card->title); ?></h4></a></div>
                        <div><p class="card-text"><?php echo e($card->description); ?></p></div>
                        <div><p><img src='/img/<?php echo e($card->type); ?>.png' class="logo_card"></p></div>
                    </div>
                </div>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div id="column3">
        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($card->status_id == 3 AND $card->workspace_id == $id_workspace): ?>
                <div class="card">
                    <div class="cor_lateral"></div>
                    <div class="card-body">
                        <a href="/details/<?php echo e($card->id); ?>"><h4 class="card-title"><?php echo e($card->title); ?></h4></a>
                        <p class="card-text"><?php echo e($card->description); ?></p>
                        <p><img src='/img/<?php echo e($card->type); ?>.png' class="logo_card"></p>
                    </div>
                </div>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div id="column4">
        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($card->status_id == 4 AND $card->workspace_id == $id_workspace): ?>
                <div class="card">
                    <div class="cor_lateral"></div>
                    <div class="card-body">
                        <a href="/details/<?php echo e($card->id); ?>"><h4 class="card-title"><?php echo e($card->title); ?></h4></a>
                        <p class="card-text"><?php echo e($card->description); ?></p>
                        <p><img src='/img/<?php echo e($card->type); ?>.png' class="logo_card"></p>
                    </div>
                </div>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div id="column5">
        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($card->status_id == 5 AND $card->workspace_id == $id_workspace): ?>
                <div class="card">
                    <div class="cor_lateral"></div>
                    <div class="card-body">
                        <a href="/details/<?php echo e($card->id); ?>"><h4 class="card-title"><?php echo e($card->title); ?></h4></a>
                        <p class="card-text"><?php echo e($card->description); ?></p>
                        <p><img src='/img/<?php echo e($card->type); ?>.png' class="logo_card"></p>
                    </div>
                </div>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

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

</body>
</html><?php /**PATH C:\Users\Guilherme\Desktop\kanban_laravel\kanban\resources\views/index.blade.php ENDPATH**/ ?>
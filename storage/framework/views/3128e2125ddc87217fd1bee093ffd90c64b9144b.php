
<?php $__env->startSection('title', 'Quadro Kanban'); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('msg')): ?>
    <p class="msg"><?php echo e(session('msg')); ?></p>
<?php endif; ?>
<form action="/update/<?php echo e($card->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
<div id="main">
    <div id="firts_content">
        <input type="text" id="title_details" name="title" value="<?php echo e($card->title); ?>">
        <hr>
        <p id="text-span"> Descrição</p>
        <textarea id="textarea" name="description">
            <?php echo e($card->description); ?>

        </textarea>
    </div>
    <div id="second_content">
        <div id="menu_lateral">
            <div id="status">
                <select name="status_id" id="status_id" class="btn3">
                    <option value="1" class="btn_status" <?php echo e($card->status_id == 1 ? "selected='selected'" : ""); ?>>Backlog</option>
                    <option value="2" class="btn_status"  <?php echo e($card->status_id == 2 ? "selected='selected'" : ""); ?>>Em analise</option>
                    <option value="3" class="btn_status"  <?php echo e($card->status_id == 3 ? "selected='selected'" : ""); ?>>Em desenvolvimento</option>
                    <option value="4" class="btn_status"  <?php echo e($card->status_id == 4 ? "selected='selected'" : ""); ?>>Em teste</option>
                    <option value="5" class="btn_status"  <?php echo e($card->status_id == 5 ? "selected='selected'" : ""); ?>>Finalizado</option>
                </select>
            </div>    
                <fieldset>
                    <legend>Informações</legend>

                    <div id="option_menu">
                    <span>Responsável: </span>
                    <select id="author" name="author">
                        <option value="Guilherme">Guilherme</option>
                        <option value="Wesley" <?php echo e($card->author == 'Wesley' ? "selected='selected'" : ""); ?>>Wesley</option>
                    </select>
                </div>

                <div id="option_menu">
                <span>Tipo: </span>
                <select id="type" name="type">
                    <option value="dev" <?php echo e($card->type == 'dev' ? "selected='selected'" : ""); ?>>Desenvolvimento</option>
                    <option value="correcao" <?php echo e($card->type == 'correcao' ? "selected='selected'" : ""); ?>>Correção</option>
                    <option value="test" <?php echo e($card->type == 'test' ? "selected='selected'" : ""); ?>>Teste</option>
                </select>
                </div>

                <div id="option_menu">
                <span>Tamanho: </span>
                <select id="size_task">
                    <option value="p">Pequena</option>
                    <option value="m">Media</option>
                    <option value="g">Grande</option>
                </select>
                </div>

                <div id="option_menu">
                <span>Solicitante: </span>
                <select id="requester">
                    <option value="guilherme">Guilherme</option>
                    <option value="wesley">Wesley</option>
                </select>
                </div>

                <div id="option_menu">
                <span>Prioridade: </span>
                <select id="type">
                    <option value="dev">Alta</option>
                    <option value="correcao">Media</option>
                    <option value="teste">Alta</option>
                </select>
                </div>
                </fieldset>

                <div id="buttons">
                <input type="submit" value="Atualizar" class="btn" id="atualizar">
            </form>
            <form action="/delete/<?php echo e($card->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="Deletar" class="btn2" id="deletar">
            </form>
                </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Guilherme\Desktop\kanban_laravel\kanban\resources\views/details.blade.php ENDPATH**/ ?>
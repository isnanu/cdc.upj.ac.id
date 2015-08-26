<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('New Alumnus'), ['action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>
        </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
<div class="page-header">
    <h2><?= __("The List of Alumni") ?></h2>
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
<div class="panel panel-default table-responsive">
<table class="table table-hover" cellpadding="0" cellspacing="0">
<thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('study_program') ?></th>
            <th><?= $this->Paginator->sort('nim') ?></th>
            <th><?= $this->Paginator->sort('graduated') ?></th>
            <th><?= $this->Paginator->sort('ipk') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alumni as $alumnus): ?>
        <tr>
            <td><?= $this->Number->format($alumnus->id) ?></td>
            <td>
                <?= $alumnus->has('user') ? $this->Html->link($alumnus->user->id, ['controller' => 'Users', 'action' => 'view', $alumnus->user->id]) : '' ?>
            </td>
            <td><?= h($alumnus->name) ?></td>
            <td><?= h($alumnus->study_program) ?></td>
            <td><?= h($alumnus->nim) ?></td>
            <td><?= h($alumnus->graduated) ?></td>
            <td><?= h($alumnus->ipk) ?></td>
            <td class="center">
                <?= $this->Html->link(__('View'), ['action' => 'view', $alumnus->id],['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnus->id],['class'=>'btn btn-default']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnus->id),'class'=>'btn btn-default']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
    <center>
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        </center>
        <!-- <p><?= $this->Paginator->counter() ?></p> -->
    </div>
</div>

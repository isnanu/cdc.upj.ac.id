<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('New Role'), ['action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __("The List of Index") ?></h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <div class="panel panel-default table-responsive">
    <table class="table table-hover" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th id="center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($roles as $role): ?>
        <tr>
            <td><?= $this->Number->format($role->id) ?></td>
            <td><?= h($role->name) ?></td>
            <td id="center">
                <?= $this->Html->link(__('View'), ['action' => 'view', $role->id],['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id],['class'=>'btn btn-default']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id),'class'=>'btn btn-default']) ?>
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
     <!--    <p><?= $this->Paginator->counter() ?></p> -->
    </center>
    </div>

</div>

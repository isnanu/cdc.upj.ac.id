<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Alumni'), ['controller' => 'Alumni', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Alumnus'), ['controller' => 'Alumni', 'action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __("The List of Users") ?></h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-default table-responsive">
    <table class="table table-hover" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','User ID') ?></th>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('role_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th id="center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td id="center"><?= $this->Number->format($user->id) ?></td>
            <td><?= h($user->username) ?></td>
            <td>
                <?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?>
            </td>
            <td><?= h($user->created) ?></td>
            <td><?= h($user->modified) ?></td>
            <td  id="center">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-default']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id),'class'=>'btn btn-default']) ?>
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
        <!-- Counting page -->
        <!-- <p><?= $this->Paginator->counter() ?></p> -->
    </center>
 </div>
</div>
</div>

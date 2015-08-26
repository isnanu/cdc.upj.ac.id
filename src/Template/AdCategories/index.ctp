<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('New Ad Category'), ['action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __("The List of Ad's Categories") ?></h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <div class="panel panel-default table-responsive">
    <table class="table table-hover" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','No') ?></th>
            <th><?= $this->Paginator->sort('name', 'Name') ?></th>
            <th id="center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($adCategories as $adCategory): ?>
        <tr>
            <td><?= $this->Number->format($adCategory->id) ?></td>
            <td><?= h($adCategory->name) ?></td>
            <td id="center">
                <?= $this->Html->link(__('View'), ['action' => 'view', $adCategory->id],['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adCategory->id],['class'=>'btn btn-default']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adCategory->id),'class'=>'btn btn-default']) ?>
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

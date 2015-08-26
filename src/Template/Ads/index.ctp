<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('New Ad'), ['action' => 'add'],['class'=>'list-group-item']) ?>
        <!-- <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?> -->
        <!-- <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?> -->
        <!-- <?= $this->Html->link(__('List Ad Categories'), ['controller' => 'AdCategories', 'action' => 'index'],['class'=>'list-group-item']) ?> -->
        <!-- <?= $this->Html->link(__('New Ad Category'), ['controller' => 'AdCategories', 'action' => 'add'],['class'=>'list-group-item']) ?> -->
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __("The List of Ads") ?></h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-default table-responsive">
    <table class="table table-hover" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','No') ?></th>
            <th><?= $this->Paginator->sort('user_name','Name') ?></th>
            <th><?= $this->Paginator->sort('ad_category_name',"Ad's Category") ?></th>
            <th><?= $this->Paginator->sort('study_program') ?></th>
            <th><?= $this->Paginator->sort('image',"Companies Logo") ?></th>
            <th><?= $this->Paginator->sort('position') ?></th>
            <th><?= $this->Paginator->sort('salary') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ads as $ad): ?>
        <tr>
            <td><?= $this->Number->format($ad->id) ?></td>
            <td>
                <?= $ad->has('user') ? $this->Html->link($ad->user->id, ['controller' => 'Users', 'action' => 'view', $ad->user->id]) : '' ?>
            </td>
            <td>
                <?= $ad->has('ad_category') ? $this->Html->link($ad->ad_category->name, ['controller' => 'AdCategories', 'action' => 'view', $ad->ad_category->id]) : '' ?>
            </td>
            <td><?= h($ad->study_program) ?></td>
            <td><?= '<img src=' h($ad->image) '>'?></td>
            <td><?= h($ad->position) ?></td>
            <td><?= h($ad->salary) ?></td>
            <td id="center">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ad->id],['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ad->id],['class'=>'btn btn-default']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->id),'class'=>'btn btn-default']) ?>
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

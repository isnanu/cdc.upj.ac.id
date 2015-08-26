<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
            <p href="#" class="list-group-item active">Action</p>
            <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $adCategory->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $adCategory->id),'class'=>'list-group-item']
                )
            ?>
            <?= $this->Html->link(__('List Ad Categories'), ['action' => 'index'],['class'=>'list-group-item']) ?>
            <?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index'],['class'=>'list-group-item']) ?>
            <?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>    

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
            <h2><?= __('Edit Ad Category') ?></h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <?= $this->Form->create($adCategory) ?>
        <?= $this->Form->input('name',['class'=>'form-control']); ?>
        <br>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

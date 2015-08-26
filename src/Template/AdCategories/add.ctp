<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('List Ad Categories'), ['action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __('Add Ad Category') ?></h2>
    </div>
    <?= $this->Form->create($adCategory) ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <?php
            echo $this->Form->input('name',['class'=>'form-control']);
        ?>
        <br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>

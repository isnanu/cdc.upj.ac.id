<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('List Roles'), ['action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __('Add New Role') ?></h2>
    </div>
    <?= $this->Form->create($role) ?>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="well well-lg" id="well">
        <?php
            echo $this->Form->input('name',['class'=>'form-control']);
        ?>
    <br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>

<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('List Users'), ['action' => 'index'],['class'=>'list-group-item']) ?>
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
        <h2><?= __('Add User') ?></h2>
    </div>
    <?= $this->Form->create($user) ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <?php
            echo $this->Form->input('username',['class'=>'form-control']);
            echo "<br>";
            echo $this->Form->input('password',['class'=>'form-control']);
            echo $this->Form->hidden('role_id', ['value' => $roles]);
        ?>
        <br>

    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>

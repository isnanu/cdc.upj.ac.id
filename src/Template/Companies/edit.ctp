<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">Action</p>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $company->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $company->id),'class'=>'list-group-item']
            )
        ?>
        <?= $this->Html->link(__('List Companies'), ['action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __('Edit Your Companiy Profile ') ?></h2>
    </div>
    <?= $this->Form->create($company) ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well well-lg" id="well">
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('name',['class'=>'form-control']);
            echo $this->Form->input('address',['class'=>'form-control']);
            echo $this->Form->input('phone',['class'=>'form-control']);
            echo $this->Form->input('fax',['class'=>'form-control']);
            echo $this->Form->input('email',['class'=>'form-control']);
            echo $this->Form->input('web',['class'=>'form-control']);
            echo $this->Form->input('industry',['class'=>'form-control']);
            echo $this->Form->input('logo',['class'=>'form-control']);
            echo $this->Form->input('company_size',['class'=>'form-control']);
            echo $this->Form->input('cp_name',['class'=>'form-control']);
            echo $this->Form->input('cp_position',['class'=>'form-control']);
            echo $this->Form->input('cp_phone',['class'=>'form-control']);
            echo $this->Form->input('cp_email',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    <?= $this->Form->end() ?>
</div>

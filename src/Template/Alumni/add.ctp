<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
       <?= $this->Html->link(__('List Alumni'), ['action' => 'index'],['class'=>'list-group-item']) ?>
       <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?>
       <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __('Add Ad Category') ?></h2>
    </div>
    <?= $this->Form->create($alumnus) ?>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well well-lg" id="well">
        <?php
            echo $this->Form->input('user_id', ['options' => $users,'class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('name',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('study_program',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('nim',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('graduated',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('ipk',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('foto',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('place_of_birth',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('date_of_birth',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('sex',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('citizen',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('religion',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('civil_status',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('address',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('phone',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('email',['class'=>'form-control']);
            echo '<br>';
        ?>
    <br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    </div>
    <?= $this->Form->end() ?>
    </div>
</div>

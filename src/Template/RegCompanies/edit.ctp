<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">Action</p>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $regCompany->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $regCompany->id),'class'=>'list-group-item']
            )
        ?>
        <?= $this->Html->link(__('List Reg Companies'), ['action' => 'index'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __('Edit Reg Companies') ?></h2>
    </div>
        <?= $this->Form->create($regCompany) ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well well-lg" id="well">
        <?php
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
<br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    </div>
    <?= $this->Form->end() ?>
    </div>
</div>

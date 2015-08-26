<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
    <div class="page-header">
        <h2><?= __('Register Company') ?></h2>
    </div>
    <?= $this->Form->create($regCompany,['type'=>'file']) ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well well-lg" id="well">
        <?php
            echo '<h3 class="page-header"><b>Contact Person</b></h3>';
            echo $this->Form->input('name',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('position',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('phone number',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('email',['class'=>'form-control']);
        ?>
    <br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    </div>
    <?= $this->Form->end() ?>
    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
    <div class="page-header">
        <h2><?= __('Register Company') ?></h2>
    </div>
    <?= $this->Form->create($regCompany,['type'=>'file']) ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well well-lg" id="well">
        <?php
            echo '<h3 class="page-header"><b>Company Profile</b></h3>'; 
            echo $this->Form->file('uploadfile.');
        ?>
        </div>
    <br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default', 'action'=>'upload']) ?>
    </div>
    <?= $this->Form->end() ?>
    </div>

</div>

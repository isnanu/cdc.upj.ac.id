<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
    <div class="page-header">
        <h2><?= __('Register Company') ?></h2>
    </div>
    <?= $this->Form->create($regCompany,['type'=>'file']) ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well well-lg" id="well">
            <?php
                echo $this->Form->input('name',['class'=>'form-control']);
                echo '<br>';
                echo $this->Form->input('address',['class'=>'form-control']);
                echo '<br>';
                echo $this->Form->input('phone',['class'=>'form-control']);
                echo '<br>';
                echo $this->Form->input('fax',['class'=>'form-control']);
                echo '<br>';
                echo $this->Form->input('email',['class'=>'form-control']);
                echo '<br>';
                echo $this->Form->input('web',['class'=>'form-control']);
                echo '<br>';
                echo $this->Form->input('industry',['class'=>'form-control']);
                echo '<br>';
                echo $this->Form->input('logo',['type'=>'file','class'=>'form-control']);
                echo '<br>'; 
            ?>
            <br>
        </div>
        <div class="well well-lg" id="well">
        <?php
            echo '<h3 class="page-header"><b>Companies Contact Person</b></h3>';
            echo $this->Form->input('cp_name',['label'=>'Name','class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('cp_position',['label'=>'Position','class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('cp_phone',['label'=>'Phone','class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('cp_email',['label'=>'Email','class'=>'form-control']);
        ?>
        </div>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
            <br>
            <?= $this->Form->end() ?>
    </div>

</div>

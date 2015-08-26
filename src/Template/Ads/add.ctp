<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
<!--     <div class="panel panel-primary">
        <p href="#" class="list-group-item active">Action</p>
        <?= $this->Html->link(__('List Ads'), ['action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Ad Categories'), ['controller' => 'AdCategories', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Ad Category'), ['controller' => 'AdCategories', 'action' => 'add'],['class'=>'list-group-item']) ?>
    </div> -->
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __('Add Ads') ?></h2>
    </div>
    <?= $this->Form->create($ad) ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="well well-lg" id="well">
        <?php
            echo $this->Form->hidden('user_id', ['default' => $users]);
            echo $this->Form->input('ad_category_id', ['label'=>'Select Ad Category','options' => $adCategories,'class'=>'form-control']);
            echo '<br>';
            echo $this->Form->label('Study Program that will be in Hire');
            echo $this->Form->select('study_program', 
                ['Akutansi','Manajemen','Ilmu Komunikasi','Psikologi','Desain Komunikasi Visual','Desain Produk Industri','Teknik Infromatika','Sistem Informasi','Teknik Sipil', 'Arsitektur'], 
                ['empty' => '(choose one)','class'=>'form-control','label'=>'Study Program that will be in Hire']);
            echo '<br>';
            echo $this->Form->input('image',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('position',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->label('Range of Salary');
            echo '<div class="form-inline">';
                echo '<div class="input-group">';
                    echo '<div class="input-group-addon">IDR</div>';
                    echo $this->Form->input('salary_min',['label'=>' ','placeholder'=>'Amount','class'=>'form-control']);
                    echo '<div class="input-group-addon">,-</div>';
                echo '</div>';
                echo '<span class="glyphicon glyphicon-minus" style="margin: 0 20px;"></span>';
                echo '<div class="input-group">';
                    echo '<div class="input-group-addon">IDR</div>';
                    echo $this->Form->input('salary_max',['label'=>' ','placeholder'=>'Amount','class'=>'form-control']);
                    echo '<div class="input-group-addon">,-</div>';
                echo '</div>';
            echo '</div>';
            echo '<br>';
            echo $this->Form->input('description',['class'=>'form-control']);
        ?>
        <br>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
        </div>
    <?= $this->Form->end() ?>
    </div>
</div>
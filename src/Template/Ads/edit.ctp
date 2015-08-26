<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">Action</p>
       <!--  <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ad->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ad->id),'class'=>'list-group-item']
            )
        ?>
        <?= $this->Html->link(__('List Ads'), ['action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('List Ad Categories'), ['controller' => 'AdCategories', 'action' => 'index'],['class'=>'list-group-item']) ?>
        <?= $this->Html->link(__('New Ad Category'), ['controller' => 'AdCategories', 'action' => 'add'],['class'=>'list-group-item']) ?> -->
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __('Edit Ad') ?></h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <?= $this->Form->create($ad) ?>
        <?= $this->Form->hidden('user_id', ['default' => $users])?>
        <?= $this->Form->input('ad_category_id', ['options' => $adCategories,'class'=>'form-control'])?>
        <?= $this->Form->input('study_program',['class'=>'form-control'])?>
        <?= $this->Form->input('image',['class'=>'form-control'])?>
        <?= $this->Form->input('position',['class'=>'form-control'])?>
        <?= $this->Form->input('salary',['class'=>'form-control'])?>
        <?= $this->Form->input('description',['class'=>'form-control'])?>
        <br>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
        <?= $this->Form->end() ?>
     </div>
</div>

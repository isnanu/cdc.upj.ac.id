<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">Action</p>
     <!--    <?= $this->Html->link(__('Edit Ad'), ['action' => 'edit', $ad->id],['class'=>'list-group-item']) ?> 
        <?= $this->Form->postLink(__('Delete Ad'), ['action' => 'delete', $ad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ad->id),'class'=>'list-group-item']) ?>  -->
        <?= $this->Html->link(__('List Ads'), ['action' => 'index'],['class'=>'list-group-item']) ?> 
        <?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add'],['class'=>'list-group-item']) ?> 
<!--         <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'list-group-item']) ?> 
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'list-group-item']) ?>  -->
        <?= $this->Html->link(__('List Ad Categories'), ['controller' => 'AdCategories', 'action' => 'index'],['class'=>'list-group-item']) ?> 
        <?= $this->Html->link(__('New Ad Category'), ['action' => 'add'],['class'=>'list-group-item']) ?> 
    </div>
</div>
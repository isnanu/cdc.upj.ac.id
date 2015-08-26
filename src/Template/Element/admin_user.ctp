<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id],['class'=>'list-group-item']) ?> 
        <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id),'class'=>'list-group-item']) ?> 
        <?= $this->Html->link(__('List Users'), ['action' => 'index'],['class'=>'list-group-item']) ?> 
        <?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'list-group-item']) ?> 
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
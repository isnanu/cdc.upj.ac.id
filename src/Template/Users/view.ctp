<?php 
    $query = $this->request->session()->read('Auth.User.role_id');

    if($query=='1')
    {
        echo $this->element('admin_user'); 
    }
    else 
    {            
        echo (''); 
    }
    
?>
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
         <h2>Welcome <?= h($user->username) ?></h2>
    </div>
   
    <div class="related row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="bs-callout bs-callout-primary ">
        <h4 class="page-header"><?= __('Your Information') ?></h4>
            <h6 class="subheader"><b><?= __('Username') ?></b></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><b><?= __('Role') ?></b></h6>
            <p><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></p>
            <h6 class="subheader"><b><?= __('Id') ?></b></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><b><?= __('Created On') ?></b></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><b><?= __('Last Modified') ?></b></h6>
            <p><?= h($user->modified) ?></p>
            </div>
        </div>
        </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="page-header">
        <h2><?= __("The List of Your Ads") ?></h2>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-default table-responsive">
    <?php if (!empty($user->ads)): ?>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
    <thead>  
        <tr>
<!--             <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th> -->
            <th><?= __('Study Program') ?></th>
            <th><?= __('Image') ?></th>
            <th><?= __('Position') ?></th>
            <th><?= __('Salary') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($user->ads as $ads): ?>
        <tr>
<!--             <td id="center"><?= h($ads->id) ?></td>
            <td><?= h($ads->user_id) ?></td> -->
            <td><?= h($ads->study_program) ?></td>
            <td><?= h($ads->image) ?></td>
            <td><?= h($ads->position) ?></td>
            <td><?= h($ads->salary) ?></td>
            <td><?= h($ads->created) ?></td>
            <td><?= h($ads->modified) ?></td>

            <td  id="center">
                <?= $this->Html->link(__('View'), ['controller' => 'Ads', 'action' => 'view', $ads->id],['class'=>'btn btn-default']) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Ads', 'action' => 'edit', $ads->id],['class'=>'btn btn-default']) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ads', 'action' => 'delete', $ads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ads->id),'class'=>'btn btn-default']) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
    </table>
     <?php endif; ?>
    </div>
    </div>
</div>

<?php 
    $query = $this->request->session()->read('Auth.User.role_id');

    if($query=='1')
    {
        echo $this->element('related_user_view'); 
    }
    else 
    {            
        echo (''); 
    }
    
?>

<?php 
    $query = $this->request->session()->read('Auth.User.role_id');

    if($query=='1')
    {
        echo $this->element('admin_adscategories'); 
    }
    else if($query=='2')
    {            
       echo $this->Html->link(__('Create New Ad'), ['controller' => 'Ads', 'action' => 'add'],['class'=>'list-group-item']); 
    }
    else if($query=='null') {
        echo '';
    }
    
?>


<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= h($ad->id) ?> (Company Name)</h2>
    </div>


<div class="related row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="bs-callout bs-callout-primary ">
        <h4 class="page-header"><?= __('Ad Information') ?></h4>

            <h5 class="subheader"><b><?= __('Category of Ad') ?></b></h5>
            <p><?= $ad->has('ad_category') ? $this->Html->link($ad->ad_category->name, ['controller' => 'AdCategories', 'action' => 'view', $ad->ad_category->id]) : '' ?></p>
            <h5 class="subheader"><b><?= __('Study Program Hiring') ?></b></h5>
            <p><?= h($ad->study_program) ?></p>
            <h5 class="subheader"><b><?= __('Image') ?></b></h5>
            <p><?= h($ad->image) ?></p>
            <h5 class="subheader"><b><?= __('Position') ?></b></h5>
            <p><?= h($ad->position) ?></p>
            <h5 class="subheader"><b><?= __('Salary') ?></b></h5>
            <p><?= h($ad->salary) ?></p>
        </div>
    </div>

        <div class="bs-callout bs-callout-success col-xs-12 col-sm-12 col-md-6 col-lg-6">   
            <h4 class="page-header"><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($ad->description)) ?>
        </div>
    

    <div class="bs-callout bs-callout-success col-xs-12 col-sm-12 col-md-6 col-lg-6">   
        <h4 class="page-header"><?= __('Created') ?></h4>
        <p><?= h($ad->modified) ?></p>
    </div>
    </div>

</div>

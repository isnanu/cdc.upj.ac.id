<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('Edit Reg Company'), ['action' => 'edit', $regCompany->id],['class'=>'list-group-item']) ?> 
        <?= $this->Form->postLink(__('Delete Reg Company'), ['action' => 'delete', $regCompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regCompany->id),'class'=>'list-group-item']) ?> 
        <?= $this->Html->link(__('List Reg Companies'), ['action' => 'index'],['class'=>'list-group-item']) ?> 
        <?= $this->Html->link(__('New Reg Company'), ['action' => 'add'],['class'=>'list-group-item']) ?> 
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= h($regCompany->name) ?></h2>
    </div>
    <div><?= $this->Html->image('uploads/reg_companies/'.($regCompany->logo), ['alt' => 'Logo','height' => 400, 'width' => 500]);?><?=$regCompany->logo?></div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="bs-callout bs-callout-primary ">
                <h4 class="page-header">Company Profile</h4>
                <h5 class="subheader"><b><?= __('Company Size') ?></b></h5>
                <p><?= h($regCompany->company_size) ?></p>
                <h5 class="subheader"><b><?= __('Industry') ?></b></h5>
                <p><?= h($regCompany->industry) ?></p>
                <h5 class="subheader"><b><?= __('Address') ?></b></h5>
                <?= $this->Text->autoParagraph(h($regCompany->address)) ?>
                <h5 class="subheader"><b><?= __('Phone') ?></b></h5>
                <p><?= h($regCompany->phone) ?></p>
                <h5 class="subheader"><b><?= __('Fax') ?></b></h5>
                <p><?= h($regCompany->fax) ?></p>
                <h5 class="subheader"><b><?= __('Email') ?></b></h5>
                <p><?= h($regCompany->email) ?></p>
                <h5 class="subheader"><b><?= __('Web') ?></b></h5>
                <p><?= h($regCompany->web) ?></p>
            </div>
        </div>
        
        <div class="bs-callout bs-callout-danger col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h4 class="page-header">Contact Person</h4>
            <h5 class="subheader"><b><?= __('Name') ?></b></h5>
            <p><?= h($regCompany->cp_name) ?></p>
            <h5 class="subheader"><b><?= __('Position') ?></b></h5>
            <p><?= h($regCompany->cp_position) ?></p>
            <h5 class="subheader"><b><?= __('Phone Number') ?></b></h5>
            <p><?= h($regCompany->cp_phone) ?></p>
            <h5 class="subheader"><b><?= __('Email') ?></b></h5>
            <p><?= h($regCompany->cp_email) ?></p>
        </div>
        
        <div class="bs-callout bs-callout-success col-xs-12 col-sm-12 col-md-6 col-lg-6">            
            <h4 class="page-header">Register on</h4>
            <p><?= h($regCompany->created) ?></p>
        </div>

        <div class="bs-callout bs-callout-default col-xs-12 col-sm-12 col-md-6 col-lg-6">            
            <h4 class="page-header">Approval</h4>
            <br>
            <?= $this->Form->postLink(__($this->html->tag('span',' ',['class'=>'glyphicon glyphicon-ok']).' '.'Accept'), 
                ['controller' => 'reg_companies', 'action' => 'approve', $regCompany->id], 
                ['confirm' => __('Are you sure you want to approve?', $regCompany->id),'class'=>'btn btn-success','escape' => FALSE]
            ) ?>
            &nbsp;&nbsp;&nbsp;
            <?= $this->Form->postLink(__($this->html->tag('span',' ',['class'=>'glyphicon glyphicon-remove']).' '.'Reject'), 
                ['controller' => 'reg_companies', 'action' => 'delete', $regCompany->id], 
                ['confirm' => __('Are you sure you want to delete?', $regCompany->id),'class'=>'btn btn-danger','escape' => FALSE]
            ) ?>  
        </div>
    </div>
</div>


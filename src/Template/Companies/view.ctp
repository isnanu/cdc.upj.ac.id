<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">Action</p>
        <?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> 
        <?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> 
        <?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> 
        <?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> 
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> 
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> 
    </div>
</div>
<div class="companies view col-xs-1 col-sm-1 col-md-9 col-lg-9">
    <h2><?= h($company->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $company->has('user') ? $this->Html->link($company->user->id, ['controller' => 'Users', 'action' => 'view', $company->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($company->name) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($company->phone) ?></p>
            <h6 class="subheader"><?= __('Fax') ?></h6>
            <p><?= h($company->fax) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($company->email) ?></p>
            <h6 class="subheader"><?= __('Web') ?></h6>
            <p><?= h($company->web) ?></p>
            <h6 class="subheader"><?= __('Industry') ?></h6>
            <p><?= h($company->industry) ?></p>
            <h6 class="subheader"><?= __('Logo') ?></h6>
            <p><?= '<img src="'.h($company->logo).'">' ?></p>
            <h6 class="subheader"><?= __('Company Size') ?></h6>
            <p><?= h($company->company_size) ?></p>
            <h6 class="subheader"><?= __('Cp Name') ?></h6>
            <p><?= h($company->cp_name) ?></p>
            <h6 class="subheader"><?= __('Cp Position') ?></h6>
            <p><?= h($company->cp_position) ?></p>
            <h6 class="subheader"><?= __('Cp Phone') ?></h6>
            <p><?= h($company->cp_phone) ?></p>
            <h6 class="subheader"><?= __('Cp Email') ?></h6>
            <p><?= h($company->cp_email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($company->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($company->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($company->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <?= $this->Text->autoParagraph(h($company->address)) ?>
        </div>
    </div>
</div>

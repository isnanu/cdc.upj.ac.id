<div class="actions col-xs-1 col-sm-1 col-md-3 col-lg-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Alumnus'), ['action' => 'edit', $alumnus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumnus'), ['action' => 'delete', $alumnus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumni'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumnus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="alumni view col-xs-1 col-sm-1 col-md-9 col-lg-9">
    <h2><?= h($alumnus->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $alumnus->has('user') ? $this->Html->link($alumnus->user->id, ['controller' => 'Users', 'action' => 'view', $alumnus->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($alumnus->name) ?></p>
            <h6 class="subheader"><?= __('Study Program') ?></h6>
            <p><?= h($alumnus->study_program) ?></p>
            <h6 class="subheader"><?= __('Nim') ?></h6>
            <p><?= h($alumnus->nim) ?></p>
            <h6 class="subheader"><?= __('Ipk') ?></h6>
            <p><?= h($alumnus->ipk) ?></p>
            <h6 class="subheader"><?= __('Foto') ?></h6>
            <p><?= h($alumnus->foto) ?></p>
            <h6 class="subheader"><?= __('Place Of Birth') ?></h6>
            <p><?= h($alumnus->place_of_birth) ?></p>
            <h6 class="subheader"><?= __('Sex') ?></h6>
            <p><?= h($alumnus->sex) ?></p>
            <h6 class="subheader"><?= __('Citizen') ?></h6>
            <p><?= h($alumnus->citizen) ?></p>
            <h6 class="subheader"><?= __('Religion') ?></h6>
            <p><?= h($alumnus->religion) ?></p>
            <h6 class="subheader"><?= __('Civil Status') ?></h6>
            <p><?= h($alumnus->civil_status) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($alumnus->phone) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($alumnus->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($alumnus->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Graduated') ?></h6>
            <p><?= h($alumnus->graduated) ?></p>
            <h6 class="subheader"><?= __('Date Of Birth') ?></h6>
            <p><?= h($alumnus->date_of_birth) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($alumnus->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($alumnus->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <?= $this->Text->autoParagraph(h($alumnus->address)) ?>
        </div>
    </div>
</div>

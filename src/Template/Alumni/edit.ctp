<div class="actions col-xs-1 col-sm-1 col-md-3 col-lg-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alumnus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alumnus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alumni'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="alumni form col-xs-1 col-sm-1 col-md-9 col-lg-9">
    <?= $this->Form->create($alumnus) ?>
    <fieldset>
        <legend><?= __('Edit Alumnus') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('name');
            echo $this->Form->input('study_program');
            echo $this->Form->input('nim');
            echo $this->Form->input('graduated');
            echo $this->Form->input('ipk');
            echo $this->Form->input('foto');
            echo $this->Form->input('place_of_birth');
            echo $this->Form->input('date_of_birth');
            echo $this->Form->input('sex');
            echo $this->Form->input('citizen');
            echo $this->Form->input('religion');
            echo $this->Form->input('civil_status');
            echo $this->Form->input('address');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

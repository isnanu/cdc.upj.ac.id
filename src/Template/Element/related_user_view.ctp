
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="page-header">
        <h2><?= __('Related Alumni') ?></h2>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php if (!empty($user->alumni)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Study Program') ?></th>
            <th><?= __('Nim') ?></th>
            <th><?= __('Graduated') ?></th>
            <th><?= __('Ipk') ?></th>
            <th><?= __('Foto') ?></th>
            <th><?= __('Place Of Birth') ?></th>
            <th><?= __('Date Of Birth') ?></th>
            <th><?= __('Sex') ?></th>
            <th><?= __('Citizen') ?></th>
            <th><?= __('Religion') ?></th>
            <th><?= __('Civil Status') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->alumni as $alumni): ?>
        <tr>
            <td><?= h($alumni->id) ?></td>
            <td><?= h($alumni->user_id) ?></td>
            <td><?= h($alumni->name) ?></td>
            <td><?= h($alumni->study_program) ?></td>
            <td><?= h($alumni->nim) ?></td>
            <td><?= h($alumni->graduated) ?></td>
            <td><?= h($alumni->ipk) ?></td>
            <td><?= h($alumni->foto) ?></td>
            <td><?= h($alumni->place_of_birth) ?></td>
            <td><?= h($alumni->date_of_birth) ?></td>
            <td><?= h($alumni->sex) ?></td>
            <td><?= h($alumni->citizen) ?></td>
            <td><?= h($alumni->religion) ?></td>
            <td><?= h($alumni->civil_status) ?></td>
            <td><?= h($alumni->address) ?></td>
            <td><?= h($alumni->phone) ?></td>
            <td><?= h($alumni->email) ?></td>
            <td><?= h($alumni->created) ?></td>
            <td><?= h($alumni->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Alumni', 'action' => 'view', $alumni->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Alumni', 'action' => 'edit', $alumni->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Alumni', 'action' => 'delete', $alumni->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumni->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="page-header">
        <h2><?= __('Related Companies') ?></h2>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php if (!empty($user->companies)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('Fax') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Web') ?></th>
            <th><?= __('Industry') ?></th>
            <th><?= __('Logo') ?></th>
            <th><?= __('Company Size') ?></th>
            <th><?= __('Cp Name') ?></th>
            <th><?= __('Cp Position') ?></th>
            <th><?= __('Cp Phone') ?></th>
            <th><?= __('Cp Email') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->companies as $companies): ?>
        <tr>
            <td><?= h($companies->id) ?></td>
            <td><?= h($companies->user_id) ?></td>
            <td><?= h($companies->name) ?></td>
            <td><?= h($companies->address) ?></td>
            <td><?= h($companies->phone) ?></td>
            <td><?= h($companies->fax) ?></td>
            <td><?= h($companies->email) ?></td>
            <td><?= h($companies->web) ?></td>
            <td><?= h($companies->industry) ?></td>
            <td><?= h($companies->logo) ?></td>
            <td><?= h($companies->company_size) ?></td>
            <td><?= h($companies->cp_name) ?></td>
            <td><?= h($companies->cp_position) ?></td>
            <td><?= h($companies->cp_phone) ?></td>
            <td><?= h($companies->cp_email) ?></td>
            <td><?= h($companies->created) ?></td>
            <td><?= h($companies->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
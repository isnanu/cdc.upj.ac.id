<div class="page-header col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="panel panel-primary">
        <p href="#" class="list-group-item active">
            Action</p>
        <?= $this->Html->link(__('New Reg Company'), ['action' => 'add'],['class'=>'list-group-item']) ?>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="page-header">
        <h2><?= __("The List of Reg Companies") ?></h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-default table-responsive">
    <table class="table table-hover" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('fax') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('web') ?></th>
            <th><?= $this->Paginator->sort('industry') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($regCompanies as $regCompany): ?>
        <tr>
            <td><?= $this->Number->format($regCompany->id) ?></td>
            <td><?= h($regCompany->name) ?></td>
            <td><?= h($regCompany->phone) ?></td>
            <td><?= h($regCompany->fax) ?></td>
            <td><?= h($regCompany->email) ?></td>
            <td><?= h($regCompany->web) ?></td>
            <td><?= h($regCompany->industry) ?></td>
            <td id="center">
                <?= $this->Html->link(__('View'), ['action' => 'view', $regCompany->id],['class'=>'btn btn-default']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
    <center>
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
<!--         <p><?= $this->Paginator->counter() ?></p> -->
     </center>
      </div>
</div>
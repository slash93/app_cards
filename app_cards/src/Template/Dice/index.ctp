<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dice'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dice index large-9 medium-8 columns content">
    <h3><?= __('Dice') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('incolor') ?></th>
                <th><?= $this->Paginator->sort('outcolor') ?></th>
                <th><?= $this->Paginator->sort('face1') ?></th>
                <th><?= $this->Paginator->sort('face2') ?></th>
                <th><?= $this->Paginator->sort('face3') ?></th>
                <th><?= $this->Paginator->sort('costface4') ?></th>
                <th><?= $this->Paginator->sort('attackface4') ?></th>
                <th><?= $this->Paginator->sort('deffenseface4') ?></th>
                <th><?= $this->Paginator->sort('burstface4') ?></th>
                <th><?= $this->Paginator->sort('costface5') ?></th>
                <th><?= $this->Paginator->sort('attackface5') ?></th>
                <th><?= $this->Paginator->sort('deffenseface5') ?></th>
                <th><?= $this->Paginator->sort('burstface5') ?></th>
                <th><?= $this->Paginator->sort('costface6') ?></th>
                <th><?= $this->Paginator->sort('attackface6') ?></th>
                <th><?= $this->Paginator->sort('deffenseface6') ?></th>
                <th><?= $this->Paginator->sort('burstface6') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dice as $dice): ?>
            <tr>
                <td><?= $this->Number->format($dice->id) ?></td>
                <td><?= h($dice->incolor) ?></td>
                <td><?= h($dice->outcolor) ?></td>
                <td><?= $this->Number->format($dice->face1) ?></td>
                <td><?= $this->Number->format($dice->face2) ?></td>
                <td><?= $this->Number->format($dice->face3) ?></td>
                <td><?= $this->Number->format($dice->costface4) ?></td>
                <td><?= $this->Number->format($dice->attackface4) ?></td>
                <td><?= $this->Number->format($dice->deffenseface4) ?></td>
                <td><?= $this->Number->format($dice->burstface4) ?></td>
                <td><?= $this->Number->format($dice->costface5) ?></td>
                <td><?= $this->Number->format($dice->attackface5) ?></td>
                <td><?= $this->Number->format($dice->deffenseface5) ?></td>
                <td><?= $this->Number->format($dice->burstface5) ?></td>
                <td><?= $this->Number->format($dice->costface6) ?></td>
                <td><?= $this->Number->format($dice->attackface6) ?></td>
                <td><?= $this->Number->format($dice->deffenseface6) ?></td>
                <td><?= $this->Number->format($dice->burstface6) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dice->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

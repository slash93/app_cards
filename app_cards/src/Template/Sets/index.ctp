<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Set'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sets index large-9 medium-8 columns content">
    <h3><?= __('Sets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('size') ?></th>
                <th><?= $this->Paginator->sort('legallity') ?></th>
                <th><?= $this->Paginator->sort('image_id') ?></th>
                <th><?= $this->Paginator->sort('brand') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sets as $set): ?>
            <tr>
                <td><?= $this->Number->format($set->id) ?></td>
                <td><?= h($set->name) ?></td>
                <td><?= h($set->date) ?></td>
                <td><?= $this->Number->format($set->size) ?></td>
                <td><?= h($set->legallity) ?></td>
                <td><?= $set->has('image') ? $this->Html->link($set->image->id, ['controller' => 'Images', 'action' => 'view', $set->image->id]) : '' ?></td>
                <td><?= h($set->brand) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $set->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $set->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $set->id], ['confirm' => __('Are you sure you want to delete # {0}?', $set->id)]) ?>
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

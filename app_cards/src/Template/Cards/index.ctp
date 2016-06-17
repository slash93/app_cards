<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sets'), ['controller' => 'Sets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Set'), ['controller' => 'Sets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Globals'), ['controller' => 'Globals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Global'), ['controller' => 'Globals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Affiliations'), ['controller' => 'Affiliations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Affiliation'), ['controller' => 'Affiliations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inventories'), ['controller' => 'Inventories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Cards'), ['controller' => 'TeamCards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Card'), ['controller' => 'TeamCards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cards index large-9 medium-8 columns content">
    <h3><?= __('Cards') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('subtitle') ?></th>
                <th><?= $this->Paginator->sort('text') ?></th>
                <th><?= $this->Paginator->sort('cost') ?></th>
                <th><?= $this->Paginator->sort('energy_type') ?></th>
                <th><?= $this->Paginator->sort('max') ?></th>
                <th><?= $this->Paginator->sort('die_id') ?></th>
                <th><?= $this->Paginator->sort('set_id') ?></th>
                <th><?= $this->Paginator->sort('collector_number') ?></th>
                <th><?= $this->Paginator->sort('rarity') ?></th>
                <th><?= $this->Paginator->sort('global_id') ?></th>
                <th><?= $this->Paginator->sort('image_id') ?></th>
                <th><?= $this->Paginator->sort('affiliation_id') ?></th>
                <th><?= $this->Paginator->sort('alliangment') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cards as $card): ?>
            <tr>
                <td><?= $this->Number->format($card->id) ?></td>
                <td><?= h($card->title) ?></td>
                <td><?= h($card->subtitle) ?></td>
                <td><?= h($card->text) ?></td>
                <td><?= $this->Number->format($card->cost) ?></td>
                <td><?= $this->Number->format($card->energy_type) ?></td>
                <td><?= $this->Number->format($card->max) ?></td>
                <td><?= $this->Number->format($card->die_id) ?></td>
                <td><?= $card->has('set') ? $this->Html->link($card->set->name, ['controller' => 'Sets', 'action' => 'view', $card->set->id]) : '' ?></td>
                <td><?= $this->Number->format($card->collector_number) ?></td>
                <td><?= h($card->rarity) ?></td>
                <td><?= $card->has('global') ? $this->Html->link($card->global->id, ['controller' => 'Globals', 'action' => 'view', $card->global->id]) : '' ?></td>
                <td><?= $card->has('image') ? $this->Html->link($card->image->id, ['controller' => 'Images', 'action' => 'view', $card->image->id]) : '' ?></td>
                <td><?= $card->has('affiliation') ? $this->Html->link($card->affiliation->name, ['controller' => 'Affiliations', 'action' => 'view', $card->affiliation->id]) : '' ?></td>
                <td><?= h($card->alliangment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $card->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $card->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?>
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

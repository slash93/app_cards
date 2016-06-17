<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Team Card'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamCards index large-9 medium-8 columns content">
    <h3><?= __('Team Cards') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('team_id') ?></th>
                <th><?= $this->Paginator->sort('card_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teamCards as $teamCard): ?>
            <tr>
                <td><?= $this->Number->format($teamCard->id) ?></td>
                <td><?= $teamCard->has('team') ? $this->Html->link($teamCard->team->name, ['controller' => 'Teams', 'action' => 'view', $teamCard->team->id]) : '' ?></td>
                <td><?= $teamCard->has('card') ? $this->Html->link($teamCard->card->title, ['controller' => 'Cards', 'action' => 'view', $teamCard->card->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teamCard->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamCard->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamCard->id)]) ?>
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

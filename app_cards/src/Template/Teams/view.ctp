<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Cards'), ['controller' => 'TeamCards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Card'), ['controller' => 'TeamCards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $team->has('user') ? $this->Html->link($team->user->id, ['controller' => 'Users', 'action' => 'view', $team->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Team Cards') ?></h4>
        <?php if (!empty($team->team_cards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Team Id') ?></th>
                <th><?= __('Card Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->team_cards as $teamCards): ?>
            <tr>
                <td><?= h($teamCards->id) ?></td>
                <td><?= h($teamCards->team_id) ?></td>
                <td><?= h($teamCards->card_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TeamCards', 'action' => 'view', $teamCards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TeamCards', 'action' => 'edit', $teamCards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeamCards', 'action' => 'delete', $teamCards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamCards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

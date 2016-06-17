<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team Card'), ['action' => 'edit', $teamCard->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team Card'), ['action' => 'delete', $teamCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamCard->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Team Cards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Card'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teamCards view large-9 medium-8 columns content">
    <h3><?= h($teamCard->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Team') ?></th>
            <td><?= $teamCard->has('team') ? $this->Html->link($teamCard->team->name, ['controller' => 'Teams', 'action' => 'view', $teamCard->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Card') ?></th>
            <td><?= $teamCard->has('card') ? $this->Html->link($teamCard->card->title, ['controller' => 'Cards', 'action' => 'view', $teamCard->card->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($teamCard->id) ?></td>
        </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Text Global'), ['action' => 'edit', $textGlobal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Text Global'), ['action' => 'delete', $textGlobal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textGlobal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Text Globals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Text Global'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="textGlobals view large-9 medium-8 columns content">
    <h3><?= h($textGlobal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Text') ?></th>
            <td><?= h($textGlobal->text) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($textGlobal->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cards') ?></h4>
        <?php if (!empty($textGlobal->cards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Subtitle') ?></th>
                <th><?= __('Text') ?></th>
                <th><?= __('Cost') ?></th>
                <th><?= __('Energy Type') ?></th>
                <th><?= __('Max') ?></th>
                <th><?= __('Die Id') ?></th>
                <th><?= __('Set Id') ?></th>
                <th><?= __('Collector Number') ?></th>
                <th><?= __('Rarity') ?></th>
                <th><?= __('Text Global Id') ?></th>
                <th><?= __('Image Id') ?></th>
                <th><?= __('Affiliation Id') ?></th>
                <th><?= __('Alliangment') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($textGlobal->cards as $cards): ?>
            <tr>
                <td><?= h($cards->id) ?></td>
                <td><?= h($cards->title) ?></td>
                <td><?= h($cards->subtitle) ?></td>
                <td><?= h($cards->text) ?></td>
                <td><?= h($cards->cost) ?></td>
                <td><?= h($cards->energy_type) ?></td>
                <td><?= h($cards->max) ?></td>
                <td><?= h($cards->die_id) ?></td>
                <td><?= h($cards->set_id) ?></td>
                <td><?= h($cards->collector_number) ?></td>
                <td><?= h($cards->rarity) ?></td>
                <td><?= h($cards->text_global_id) ?></td>
                <td><?= h($cards->image_id) ?></td>
                <td><?= h($cards->affiliation_id) ?></td>
                <td><?= h($cards->alliangment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cards', 'action' => 'view', $cards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cards', 'action' => 'edit', $cards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cards', 'action' => 'delete', $cards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Affiliation'), ['action' => 'edit', $affiliation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Affiliation'), ['action' => 'delete', $affiliation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Affiliations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="affiliations view large-9 medium-8 columns content">
    <h3><?= h($affiliation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($affiliation->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= $affiliation->has('image') ? $this->Html->link($affiliation->image->id, ['controller' => 'Images', 'action' => 'view', $affiliation->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($affiliation->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cards') ?></h4>
        <?php if (!empty($affiliation->cards)): ?>
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
                <th><?= __('Global Id') ?></th>
                <th><?= __('Image Id') ?></th>
                <th><?= __('Affiliation Id') ?></th>
                <th><?= __('Alliangment') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($affiliation->cards as $cards): ?>
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
                <td><?= h($cards->global_id) ?></td>
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

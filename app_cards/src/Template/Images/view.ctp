<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Affiliations'), ['controller' => 'Affiliations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliation'), ['controller' => 'Affiliations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sets'), ['controller' => 'Sets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Set'), ['controller' => 'Sets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="images view large-9 medium-8 columns content">
    <h3><?= h($image->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($image->image)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Affiliations') ?></h4>
        <?php if (!empty($image->affiliations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Image Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->affiliations as $affiliations): ?>
            <tr>
                <td><?= h($affiliations->id) ?></td>
                <td><?= h($affiliations->name) ?></td>
                <td><?= h($affiliations->image_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Affiliations', 'action' => 'view', $affiliations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Affiliations', 'action' => 'edit', $affiliations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Affiliations', 'action' => 'delete', $affiliations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cards') ?></h4>
        <?php if (!empty($image->cards)): ?>
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
            <?php foreach ($image->cards as $cards): ?>
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
    <div class="related">
        <h4><?= __('Related Sets') ?></h4>
        <?php if (!empty($image->sets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Size') ?></th>
                <th><?= __('Legallity') ?></th>
                <th><?= __('Image Id') ?></th>
                <th><?= __('Brand') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->sets as $sets): ?>
            <tr>
                <td><?= h($sets->id) ?></td>
                <td><?= h($sets->name) ?></td>
                <td><?= h($sets->date) ?></td>
                <td><?= h($sets->size) ?></td>
                <td><?= h($sets->legallity) ?></td>
                <td><?= h($sets->image_id) ?></td>
                <td><?= h($sets->brand) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sets', 'action' => 'view', $sets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sets', 'action' => 'edit', $sets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sets', 'action' => 'delete', $sets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

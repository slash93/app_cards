<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sets'), ['controller' => 'Sets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Set'), ['controller' => 'Sets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Globals'), ['controller' => 'Globals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Global'), ['controller' => 'Globals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Affiliations'), ['controller' => 'Affiliations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliation'), ['controller' => 'Affiliations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inventories'), ['controller' => 'Inventories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Cards'), ['controller' => 'TeamCards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Card'), ['controller' => 'TeamCards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cards view large-9 medium-8 columns content">
    <h3><?= h($card->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($card->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Subtitle') ?></th>
            <td><?= h($card->subtitle) ?></td>
        </tr>
        <tr>
            <th><?= __('Text') ?></th>
            <td><?= h($card->text) ?></td>
        </tr>
        <tr>
            <th><?= __('Set') ?></th>
            <td><?= $card->has('set') ? $this->Html->link($card->set->name, ['controller' => 'Sets', 'action' => 'view', $card->set->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Rarity') ?></th>
            <td><?= h($card->rarity) ?></td>
        </tr>
        <tr>
            <th><?= __('Global') ?></th>
            <td><?= $card->has('global') ? $this->Html->link($card->global->id, ['controller' => 'Globals', 'action' => 'view', $card->global->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= $card->has('image') ? $this->Html->link($card->image->id, ['controller' => 'Images', 'action' => 'view', $card->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Affiliation') ?></th>
            <td><?= $card->has('affiliation') ? $this->Html->link($card->affiliation->name, ['controller' => 'Affiliations', 'action' => 'view', $card->affiliation->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Alliangment') ?></th>
            <td><?= h($card->alliangment) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($card->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Cost') ?></th>
            <td><?= $this->Number->format($card->cost) ?></td>
        </tr>
        <tr>
            <th><?= __('Energy Type') ?></th>
            <td><?= $this->Number->format($card->energy_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Max') ?></th>
            <td><?= $this->Number->format($card->max) ?></td>
        </tr>
        <tr>
            <th><?= __('Die Id') ?></th>
            <td><?= $this->Number->format($card->die_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Collector Number') ?></th>
            <td><?= $this->Number->format($card->collector_number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($card->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Comment') ?></th>
                <th><?= __('Card Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($card->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->comment) ?></td>
                <td><?= h($comments->card_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Inventories') ?></h4>
        <?php if (!empty($card->inventories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Card Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($card->inventories as $inventories): ?>
            <tr>
                <td><?= h($inventories->id) ?></td>
                <td><?= h($inventories->user_id) ?></td>
                <td><?= h($inventories->card_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Inventories', 'action' => 'view', $inventories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Inventories', 'action' => 'edit', $inventories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inventories', 'action' => 'delete', $inventories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Team Cards') ?></h4>
        <?php if (!empty($card->team_cards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Team Id') ?></th>
                <th><?= __('Card Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($card->team_cards as $teamCards): ?>
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

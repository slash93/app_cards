<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dice'), ['action' => 'edit', $dice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dice'), ['action' => 'delete', $dice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dice'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dice'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dice view large-9 medium-8 columns content">
    <h3><?= h($dice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Incolor') ?></th>
            <td><?= h($dice->incolor) ?></td>
        </tr>
        <tr>
            <th><?= __('Outcolor') ?></th>
            <td><?= h($dice->outcolor) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($dice->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Face1') ?></th>
            <td><?= $this->Number->format($dice->face1) ?></td>
        </tr>
        <tr>
            <th><?= __('Face2') ?></th>
            <td><?= $this->Number->format($dice->face2) ?></td>
        </tr>
        <tr>
            <th><?= __('Face3') ?></th>
            <td><?= $this->Number->format($dice->face3) ?></td>
        </tr>
        <tr>
            <th><?= __('Costface4') ?></th>
            <td><?= $this->Number->format($dice->costface4) ?></td>
        </tr>
        <tr>
            <th><?= __('Attackface4') ?></th>
            <td><?= $this->Number->format($dice->attackface4) ?></td>
        </tr>
        <tr>
            <th><?= __('Deffenseface4') ?></th>
            <td><?= $this->Number->format($dice->deffenseface4) ?></td>
        </tr>
        <tr>
            <th><?= __('Burstface4') ?></th>
            <td><?= $this->Number->format($dice->burstface4) ?></td>
        </tr>
        <tr>
            <th><?= __('Costface5') ?></th>
            <td><?= $this->Number->format($dice->costface5) ?></td>
        </tr>
        <tr>
            <th><?= __('Attackface5') ?></th>
            <td><?= $this->Number->format($dice->attackface5) ?></td>
        </tr>
        <tr>
            <th><?= __('Deffenseface5') ?></th>
            <td><?= $this->Number->format($dice->deffenseface5) ?></td>
        </tr>
        <tr>
            <th><?= __('Burstface5') ?></th>
            <td><?= $this->Number->format($dice->burstface5) ?></td>
        </tr>
        <tr>
            <th><?= __('Costface6') ?></th>
            <td><?= $this->Number->format($dice->costface6) ?></td>
        </tr>
        <tr>
            <th><?= __('Attackface6') ?></th>
            <td><?= $this->Number->format($dice->attackface6) ?></td>
        </tr>
        <tr>
            <th><?= __('Deffenseface6') ?></th>
            <td><?= $this->Number->format($dice->deffenseface6) ?></td>
        </tr>
        <tr>
            <th><?= __('Burstface6') ?></th>
            <td><?= $this->Number->format($dice->burstface6) ?></td>
        </tr>
    </table>
</div>

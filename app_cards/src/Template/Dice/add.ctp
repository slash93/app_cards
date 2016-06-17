<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dice'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dice form large-9 medium-8 columns content">
    <?= $this->Form->create($dice) ?>
    <fieldset>
        <legend><?= __('Add Dice') ?></legend>
        <?php
            echo $this->Form->input('incolor');
            echo $this->Form->input('outcolor');
            echo $this->Form->input('face1');
            echo $this->Form->input('face2');
            echo $this->Form->input('face3');
            echo $this->Form->input('costface4');
            echo $this->Form->input('attackface4');
            echo $this->Form->input('deffenseface4');
            echo $this->Form->input('burstface4');
            echo $this->Form->input('costface5');
            echo $this->Form->input('attackface5');
            echo $this->Form->input('deffenseface5');
            echo $this->Form->input('burstface5');
            echo $this->Form->input('costface6');
            echo $this->Form->input('attackface6');
            echo $this->Form->input('deffenseface6');
            echo $this->Form->input('burstface6');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

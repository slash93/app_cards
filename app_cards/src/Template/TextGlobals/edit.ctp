<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $textGlobal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $textGlobal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Text Globals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="textGlobals form large-9 medium-8 columns content">
    <?= $this->Form->create($textGlobal) ?>
    <fieldset>
        <legend><?= __('Edit Text Global') ?></legend>
        <?php
            echo $this->Form->input('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

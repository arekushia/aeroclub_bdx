<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessagesTopic $messagesTopic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $messagesTopic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $messagesTopic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Messages Topics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="messagesTopics form large-9 medium-8 columns content">
    <?= $this->Form->create($messagesTopic) ?>
    <fieldset>
        <legend><?= __('Edit Messages Topic') ?></legend>
        <?php
            echo $this->Form->control('topic_id', ['options' => $topics]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('contenu');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessagesTopic $messagesTopic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Messages Topic'), ['action' => 'edit', $messagesTopic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Messages Topic'), ['action' => 'delete', $messagesTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesTopic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages Topics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Messages Topic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="messagesTopics view large-9 medium-8 columns content">
    <h3><?= h($messagesTopic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Topic') ?></th>
            <td><?= $messagesTopic->has('topic') ? $this->Html->link($messagesTopic->topic->id, ['controller' => 'Topics', 'action' => 'view', $messagesTopic->topic->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $messagesTopic->has('user') ? $this->Html->link($messagesTopic->user->id, ['controller' => 'Users', 'action' => 'view', $messagesTopic->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contenu') ?></th>
            <td><?= h($messagesTopic->contenu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($messagesTopic->id) ?></td>
        </tr>
    </table>
</div>

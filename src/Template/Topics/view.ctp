<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Topic $topic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Topic'), ['action' => 'edit', $topic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Topic'), ['action' => 'delete', $topic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages Topics'), ['controller' => 'MessagesTopics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Messages Topic'), ['controller' => 'MessagesTopics', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="topics view large-9 medium-8 columns content">
    <h3><?= h($topic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $topic->has('user') ? $this->Html->link($topic->user->id, ['controller' => 'Users', 'action' => 'view', $topic->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($topic->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($topic->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($topic->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Messages Topics') ?></h4>
        <?php if (!empty($topic->messages_topics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Topic Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contenu') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($topic->messages_topics as $messagesTopics): ?>
            <tr>
                <td><?= h($messagesTopics->id) ?></td>
                <td><?= h($messagesTopics->topic_id) ?></td>
                <td><?= h($messagesTopics->user_id) ?></td>
                <td><?= h($messagesTopics->contenu) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MessagesTopics', 'action' => 'view', $messagesTopics->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MessagesTopics', 'action' => 'edit', $messagesTopics->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MessagesTopics', 'action' => 'delete', $messagesTopics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesTopics->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

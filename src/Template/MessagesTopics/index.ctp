<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessagesTopic[]|\Cake\Collection\CollectionInterface $messagesTopics
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Messages Topic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="messagesTopics index large-9 medium-8 columns content">
    <h3><?= __('Messages Topics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('topic_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contenu') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messagesTopics as $messagesTopic): ?>
            <tr>
                <td><?= $this->Number->format($messagesTopic->id) ?></td>
                <td><?= $messagesTopic->has('topic') ? $this->Html->link($messagesTopic->topic->id, ['controller' => 'Topics', 'action' => 'view', $messagesTopic->topic->id]) : '' ?></td>
                <td><?= $messagesTopic->has('user') ? $this->Html->link($messagesTopic->user->id, ['controller' => 'Users', 'action' => 'view', $messagesTopic->user->id]) : '' ?></td>
                <td><?= h($messagesTopic->contenu) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $messagesTopic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $messagesTopic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $messagesTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesTopic->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

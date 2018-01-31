<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Galeries'), ['controller' => 'Galeries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galery'), ['controller' => 'Galeries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messages Topics'), ['controller' => 'MessagesTopics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Messages Topic'), ['controller' => 'MessagesTopics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Voyages'), ['controller' => 'Voyages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voyage'), ['controller' => 'Voyages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('civilite');
            echo $this->Form->control('email');
            echo $this->Form->control('profession');
            echo $this->Form->control('adresse');
            echo $this->Form->control('ville');
            echo $this->Form->control('codePostal');
            echo $this->Form->control('telephoneDomicile');
            echo $this->Form->control('telephoneBureau');
            echo $this->Form->control('telephonePortable');
            echo $this->Form->control('isPilote');
            echo $this->Form->control('urlImage');
            echo $this->Form->control('isAbonne');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

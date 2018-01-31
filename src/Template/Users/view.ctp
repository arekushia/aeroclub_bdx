<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Galeries'), ['controller' => 'Galeries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galery'), ['controller' => 'Galeries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages Topics'), ['controller' => 'MessagesTopics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Messages Topic'), ['controller' => 'MessagesTopics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Voyages'), ['controller' => 'Voyages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Voyage'), ['controller' => 'Voyages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($user->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($user->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession') ?></th>
            <td><?= h($user->profession) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($user->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($user->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CodePostal') ?></th>
            <td><?= h($user->codePostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TelephoneDomicile') ?></th>
            <td><?= h($user->telephoneDomicile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TelephoneBureau') ?></th>
            <td><?= h($user->telephoneBureau) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TelephonePortable') ?></th>
            <td><?= h($user->telephonePortable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UrlImage') ?></th>
            <td><?= h($user->urlImage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Civilite') ?></th>
            <td><?= $user->civilite ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsPilote') ?></th>
            <td><?= $user->isPilote ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsAbonne') ?></th>
            <td><?= $user->isAbonne ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Galeries') ?></h4>
        <?php if (!empty($user->galeries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->galeries as $galeries): ?>
            <tr>
                <td><?= h($galeries->id) ?></td>
                <td><?= h($galeries->user_id) ?></td>
                <td><?= h($galeries->nom) ?></td>
                <td><?= h($galeries->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Galeries', 'action' => 'view', $galeries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Galeries', 'action' => 'edit', $galeries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Galeries', 'action' => 'delete', $galeries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messages Topics') ?></h4>
        <?php if (!empty($user->messages_topics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Topic Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contenu') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->messages_topics as $messagesTopics): ?>
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
    <div class="related">
        <h4><?= __('Related Topics') ?></h4>
        <?php if (!empty($user->topics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->topics as $topics): ?>
            <tr>
                <td><?= h($topics->id) ?></td>
                <td><?= h($topics->user_id) ?></td>
                <td><?= h($topics->nom) ?></td>
                <td><?= h($topics->message) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Topics', 'action' => 'view', $topics->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Topics', 'action' => 'edit', $topics->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Topics', 'action' => 'delete', $topics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $topics->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Voyages') ?></h4>
        <?php if (!empty($user->voyages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Depart') ?></th>
                <th scope="col"><?= __('Destination') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->voyages as $voyages): ?>
            <tr>
                <td><?= h($voyages->id) ?></td>
                <td><?= h($voyages->user_id) ?></td>
                <td><?= h($voyages->depart) ?></td>
                <td><?= h($voyages->destination) ?></td>
                <td><?= h($voyages->date) ?></td>
                <td><?= h($voyages->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Voyages', 'action' => 'view', $voyages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Voyages', 'action' => 'edit', $voyages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voyages', 'action' => 'delete', $voyages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voyages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MessagesTopic Entity
 *
 * @property int $id
 * @property int $topic_id
 * @property int $user_id
 * @property string $contenu
 *
 * @property \App\Model\Entity\Topic $topic
 * @property \App\Model\Entity\User $user
 */
class MessagesTopic extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'topic_id' => true,
        'user_id' => true,
        'contenu' => true,
        'topic' => true,
        'user' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 * @property string $nom
 * @property string $prenom
 * @property bool $civilite
 * @property string $email
 * @property string $profession
 * @property string $adresse
 * @property string $ville
 * @property string $codePostal
 * @property string $telephoneDomicile
 * @property string $telephoneBureau
 * @property string $telephonePortable
 * @property bool $isPilote
 * @property string $urlImage
 * @property bool $isAbonne
 *
 * @property \App\Model\Entity\Galery[] $galeries
 * @property \App\Model\Entity\MessagesTopic[] $messages_topics
 * @property \App\Model\Entity\Topic[] $topics
 * @property \App\Model\Entity\Voyage[] $voyages
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'role' => true,
        'nom' => true,
        'prenom' => true,
        'civilite' => true,
        'email' => true,
        'profession' => true,
        'adresse' => true,
        'ville' => true,
        'codePostal' => true,
        'telephoneDomicile' => true,
        'telephoneBureau' => true,
        'telephonePortable' => true,
        'isPilote' => true,
        'urlImage' => true,
        'isAbonne' => true,
        'galeries' => true,
        'messages_topics' => true,
        'topics' => true,
        'voyages' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}

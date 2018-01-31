<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\GaleriesTable|\Cake\ORM\Association\HasMany $Galeries
 * @property \App\Model\Table\MessagesTopicsTable|\Cake\ORM\Association\HasMany $MessagesTopics
 * @property \App\Model\Table\TopicsTable|\Cake\ORM\Association\HasMany $Topics
 * @property \App\Model\Table\VoyagesTable|\Cake\ORM\Association\HasMany $Voyages
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Galeries', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('MessagesTopics', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Topics', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Voyages', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 255)
            ->requirePresence('prenom', 'create')
            ->notEmpty('prenom');

        $validator
            ->boolean('civilite')
            ->requirePresence('civilite', 'create')
            ->notEmpty('civilite');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('profession')
            ->maxLength('profession', 255)
            ->requirePresence('profession', 'create')
            ->notEmpty('profession');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 255)
            ->requirePresence('adresse', 'create')
            ->notEmpty('adresse');

        $validator
            ->scalar('ville')
            ->maxLength('ville', 255)
            ->requirePresence('ville', 'create')
            ->notEmpty('ville');

        $validator
            ->scalar('codePostal')
            ->maxLength('codePostal', 255)
            ->requirePresence('codePostal', 'create')
            ->notEmpty('codePostal');

        $validator
            ->scalar('telephoneDomicile')
            ->maxLength('telephoneDomicile', 255)
            ->requirePresence('telephoneDomicile', 'create')
            ->notEmpty('telephoneDomicile');

        $validator
            ->scalar('telephoneBureau')
            ->maxLength('telephoneBureau', 255)
            ->requirePresence('telephoneBureau', 'create')
            ->notEmpty('telephoneBureau');

        $validator
            ->scalar('telephonePortable')
            ->maxLength('telephonePortable', 255)
            ->requirePresence('telephonePortable', 'create')
            ->notEmpty('telephonePortable');

        $validator
            ->boolean('isPilote')
            ->requirePresence('isPilote', 'create')
            ->notEmpty('isPilote');

        $validator
            ->scalar('urlImage')
            ->maxLength('urlImage', 255)
            ->requirePresence('urlImage', 'create')
            ->notEmpty('urlImage');

        $validator
            ->boolean('isAbonne')
            ->requirePresence('isAbonne', 'create')
            ->notEmpty('isAbonne');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}

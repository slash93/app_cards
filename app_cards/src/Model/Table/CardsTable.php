<?php
namespace App\Model\Table;

use App\Model\Entity\Card;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cards Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Dies
 * @property \Cake\ORM\Association\BelongsTo $Sets
 * @property \Cake\ORM\Association\BelongsTo $Globals
 * @property \Cake\ORM\Association\BelongsTo $Images
 * @property \Cake\ORM\Association\BelongsTo $Affiliations
 * @property \Cake\ORM\Association\HasMany $Comments
 * @property \Cake\ORM\Association\HasMany $Inventories
 * @property \Cake\ORM\Association\HasMany $TeamCards
 */
class CardsTable extends Table
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

        $this->table('cards');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Dies', [
            'foreignKey' => 'die_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sets', [
            'foreignKey' => 'set_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Globals', [
            'foreignKey' => 'global_id'
        ]);
        $this->belongsTo('Images', [
            'foreignKey' => 'image_id'
        ]);
        $this->belongsTo('Affiliations', [
            'foreignKey' => 'affiliation_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'card_id'
        ]);
        $this->hasMany('Inventories', [
            'foreignKey' => 'card_id'
        ]);
        $this->hasMany('TeamCards', [
            'foreignKey' => 'card_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('subtitle', 'create')
            ->notEmpty('subtitle');

        $validator
            ->allowEmpty('text');

        $validator
            ->integer('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->integer('energy_type')
            ->requirePresence('energy_type', 'create')
            ->notEmpty('energy_type');

        $validator
            ->integer('max')
            ->requirePresence('max', 'create')
            ->notEmpty('max');

        $validator
            ->integer('collector_number')
            ->requirePresence('collector_number', 'create')
            ->notEmpty('collector_number');

        $validator
            ->requirePresence('rarity', 'create')
            ->notEmpty('rarity');

        $validator
            ->allowEmpty('alliangment');

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
        $rules->add($rules->existsIn(['die_id'], 'Dies'));
        $rules->add($rules->existsIn(['set_id'], 'Sets'));
        $rules->add($rules->existsIn(['global_id'], 'Globals'));
        $rules->add($rules->existsIn(['image_id'], 'Images'));
        $rules->add($rules->existsIn(['affiliation_id'], 'Affiliations'));
        return $rules;
    }
}

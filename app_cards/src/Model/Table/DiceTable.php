<?php
namespace App\Model\Table;

use App\Model\Entity\Dice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dice Model
 *
 */
class DiceTable extends Table
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

        $this->table('dice');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('incolor', 'create')
            ->notEmpty('incolor');

        $validator
            ->requirePresence('outcolor', 'create')
            ->notEmpty('outcolor');

        $validator
            ->integer('face1')
            ->requirePresence('face1', 'create')
            ->notEmpty('face1');

        $validator
            ->integer('face2')
            ->requirePresence('face2', 'create')
            ->notEmpty('face2');

        $validator
            ->integer('face3')
            ->requirePresence('face3', 'create')
            ->notEmpty('face3');

        $validator
            ->integer('costface4')
            ->requirePresence('costface4', 'create')
            ->notEmpty('costface4');

        $validator
            ->integer('attackface4')
            ->requirePresence('attackface4', 'create')
            ->notEmpty('attackface4');

        $validator
            ->integer('deffenseface4')
            ->requirePresence('deffenseface4', 'create')
            ->notEmpty('deffenseface4');

        $validator
            ->integer('burstface4')
            ->requirePresence('burstface4', 'create')
            ->notEmpty('burstface4');

        $validator
            ->integer('costface5')
            ->requirePresence('costface5', 'create')
            ->notEmpty('costface5');

        $validator
            ->integer('attackface5')
            ->requirePresence('attackface5', 'create')
            ->notEmpty('attackface5');

        $validator
            ->integer('deffenseface5')
            ->requirePresence('deffenseface5', 'create')
            ->notEmpty('deffenseface5');

        $validator
            ->integer('burstface5')
            ->requirePresence('burstface5', 'create')
            ->notEmpty('burstface5');

        $validator
            ->integer('costface6')
            ->requirePresence('costface6', 'create')
            ->notEmpty('costface6');

        $validator
            ->integer('attackface6')
            ->requirePresence('attackface6', 'create')
            ->notEmpty('attackface6');

        $validator
            ->integer('deffenseface6')
            ->requirePresence('deffenseface6', 'create')
            ->notEmpty('deffenseface6');

        $validator
            ->integer('burstface6')
            ->requirePresence('burstface6', 'create')
            ->notEmpty('burstface6');

        return $validator;
    }
}

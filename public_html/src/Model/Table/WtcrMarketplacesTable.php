<?php
namespace App\Model\Table;

use App\Model\Entity\WtcrMarketplace;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WtcrMarketplaces Model
 */
class WtcrMarketplacesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wtcr_marketplaces');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('WtcrMarketplaceTemplates', [
            'foreignKey' => 'wtcr_marketplace_template_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('marketplace_name', 'create')
            ->notEmpty('marketplace_name')
            ->add('wtcr_marketplace_template_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wtcr_marketplace_template_id');

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
        $rules->add($rules->existsIn(['wtcr_marketplace_template_id'], 'WtcrMarketplaceTemplates'));
        return $rules;
    }
}

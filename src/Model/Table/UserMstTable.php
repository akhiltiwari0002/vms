<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserMst Model
 *
 * @method \App\Model\Entity\UserMst newEmptyEntity()
 * @method \App\Model\Entity\UserMst newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\UserMst> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserMst get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\UserMst findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\UserMst patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\UserMst> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserMst|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\UserMst saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\UserMst>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserMst>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserMst>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserMst> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserMst>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserMst>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\UserMst>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\UserMst> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UserMstTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('user_mst');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('username')
            ->maxLength('username', 20)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 20)
            ->allowEmptyString('password');

        $validator
            ->integer('user_type')
            ->allowEmptyString('user_type');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->scalar('name')
            ->maxLength('name', 20)
            ->allowEmptyString('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);

        return $rules;
    }
}

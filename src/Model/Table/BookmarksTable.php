<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class BookmarksTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('title')
            ->requirePresence('title', 'create')
            ->notEmptyString('body')
            ->requirePresence('body', 'create');

        return $validator;
    }
}
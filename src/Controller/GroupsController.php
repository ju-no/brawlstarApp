<?php
declare(strict_types=1);

namespace App\Controller;

class GroupsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }
}
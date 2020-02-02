<?php

namespace App\Repositories;

use Illuminate\Contracts\Container\Container;
use Rinvex\Repository\Repositories\EloquentRepository;

class RepositoryGenerico extends EloquentRepository
{
    // Instantiate repository object with required data
    public function __construct(Container $container)
    {
        $this->setContainer($container)
             ->setRepositoryId('rinvex.repository.uniqueid');
    }
}

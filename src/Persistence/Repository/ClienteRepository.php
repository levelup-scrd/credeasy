<?php

namespace Sicredi\Credeasy\Persistence\Repository;

use Doctrine\ORM\EntityRepository;
use Sicredi\Credeasy\Model\Cliente;


class ClienteRepository extends EntityRepository
{
    public function insert(Cliente $cliente): Cliente
    {
        $this->getEntityManager()->persist($cliente);
        return $cliente;
    }
}
<?php

namespace Sicredi\Credeasy\Persistence\Repository;

use Doctrine\ORM\EntityRepository;
use Sicredi\Credeasy\Model\Emprestimo;

class EmprestimoRepository extends EntityRepository
{
    public function insert(Emprestimo $emprestimo): Emprestimo
    {
        $this->getEntityManager()->persist($emprestimo);
        return $emprestimo;
    }
}
<?php

namespace Sicredi\Credeasy\Persistence\Repository;

use Doctrine\ORM\EntityRepository;
use Sicredi\Credeasy\Model\Parcela;

class ParcelaRepository extends EntityRepository
{
    public function insere(Parcela $parcela): Parcela
    {
        $this->getEntityManager()->persist($parcela);
        return $parcela;
    }

}
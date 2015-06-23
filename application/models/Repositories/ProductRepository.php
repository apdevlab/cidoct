<?php
namespace Repositories;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

class ProductRepository extends EntityRepository {
    public function getAllProductArrays()
    {
        return $this->getEntitymanager()->createQueryBuilder()
            ->select('p')
            ->from('Entities\Product', 'p')
            ->getQuery()
            ->getArrayResult();
    }

    public function getProductArrayById($id)
    {
        return $this->getEntitymanager()->createQueryBuilder()
            ->select('p')
            ->from('Entities\Product', 'p')
            ->where('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult(Query::HYDRATE_ARRAY);
    }
}

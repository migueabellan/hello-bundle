<?php

namespace Migueabellan\HelloBundle\Entity;

use Migueabellan\HelloBundle\Entity\Hello;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class HelloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hello::class);
    }
}

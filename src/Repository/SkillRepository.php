<?php

namespace App\Repository;

use App\Entity\Skill;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


/**
 * Class SkillRepository
 * @package App\Repository
 */
class SkillRepository extends ServiceEntityRepository
{
    /**
     * SkillRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skill::class);
    }
}

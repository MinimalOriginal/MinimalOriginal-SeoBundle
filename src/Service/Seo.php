<?php

namespace MinimalOriginal\SeoBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\RequestStack;

use MinimalOriginal\CoreBundle\Util\TextParser;
use MinimalOriginal\CoreBundle\Service\Seo as BaseSeo;
use MinimalOriginal\SeoBundle\Entity\Seo as SeoEntity;

class Seo extends BaseSeo
{
  protected $em;
  protected $requestStack;

    /**
    * @param EntityManagerInterface $em
    * @param RequestStack $requestStack
    */
    public function __construct(EntityManagerInterface $em, RequestStack $requestStack)
    {
      parent::__construct();
      $this->em = $em;
      $this->requestStack = $requestStack;
    }

    /**
    *
    * @param string $default
    *
    * @return string
    */
    public function getTitle($default = null)
    {
      $request = $this->requestStack->getCurrentRequest();
      if( null !== ($route = $request->get('_route')) ){
        $repository = $this->em->getRepository(SeoEntity::class);
        $seo = $repository->createQueryBuilder('s')
        ->join('s.routing', 'r')
        ->where('r.route IN (:routename)')
        ->setParameter('routename', $route)
        ->getQuery()
        ->getOneOrNullResult();

        if( null !== $seo ){
          return $seo->getTitle();
        }
      }
    }

}

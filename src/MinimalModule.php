<?php

namespace MinimalOriginal\SeoBundle;

use MinimalOriginal\CoreBundle\Modules\ModuleInterface;

use MinimalOriginal\SeoBundle\Form\SeoType;
use MinimalOriginal\SeoBundle\Entity\Seo;

class MinimalModule implements ModuleInterface{

  private $moduleList;

  /**
   * {@inheritdoc}
   */
  public function getName(){
    return 'seo';
  }

  /**
   * {@inheritdoc}
   */
  public function getTitle(){
    return "SEO";
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription(){
    return "Créez ou modifiez les seo de votre site.";
  }

  /**
   * {@inheritdoc}
   */
  public function getEntityClass(){
    return Seo::class;
  }

  /**
   * {@inheritdoc}
   */
  public function getFormTypeClass(){
    return SeoType::class;
  }

}

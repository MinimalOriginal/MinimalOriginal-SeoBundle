<?php

namespace MinimalOriginal\SeoBundle;

use MinimalOriginal\CoreBundle\Modules\AbstractManageableModule;

use MinimalOriginal\SeoBundle\Form\SeoType;
use MinimalOriginal\SeoBundle\Entity\Seo;

class MinimalModule extends AbstractManageableModule{

  /**
   * {@inheritdoc}
   */
  public function init(){
    $this->informations->set('name', 'seo');
    $this->informations->set('title', 'SEO');
    $this->informations->set('description', "Créez ou modifiez les seo de votre site.");
    $this->informations->set('icon', "ion-ios-world-outline");
    return $this;
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

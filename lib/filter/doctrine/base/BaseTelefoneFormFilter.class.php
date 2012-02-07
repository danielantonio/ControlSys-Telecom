<?php

/**
 * Telefone filter form base class.
 *
 * @package    control_sys
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTelefoneFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'telefone'   => new sfWidgetFormFilterInput(),
      'cliente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'tipo'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'telefone'   => new sfValidatorPass(array('required' => false)),
      'cliente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cliente'), 'column' => 'id')),
      'tipo'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('telefone_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Telefone';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'telefone'   => 'Text',
      'cliente_id' => 'ForeignKey',
      'tipo'       => 'Text',
    );
  }
}

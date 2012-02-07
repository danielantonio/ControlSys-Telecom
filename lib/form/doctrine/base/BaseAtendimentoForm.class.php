<?php

/**
 * Atendimento form base class.
 *
 * @method Atendimento getObject() Returns the current form's model object
 *
 * @package    control_sys
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAtendimentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'descricao'  => new sfWidgetFormInputText(),
      'cliente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'tipo'       => new sfWidgetFormInputText(),
      'numero'     => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'descricao'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cliente_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'required' => false)),
      'tipo'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'numero'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('atendimento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Atendimento';
  }

}

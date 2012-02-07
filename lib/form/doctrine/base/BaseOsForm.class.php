<?php

/**
 * Os form base class.
 *
 * @method Os getObject() Returns the current form's model object
 *
 * @package    control_sys
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'telefone'       => new sfWidgetFormInputText(),
      'cliente_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'atendimento_id' => new sfWidgetFormInputText(),
      'tipo'           => new sfWidgetFormInputText(),
      'descricao'      => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'telefone'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cliente_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'required' => false)),
      'atendimento_id' => new sfValidatorInteger(array('required' => false)),
      'tipo'           => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'descricao'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('os[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Os';
  }

}

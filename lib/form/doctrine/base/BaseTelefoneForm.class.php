<?php

/**
 * Telefone form base class.
 *
 * @method Telefone getObject() Returns the current form's model object
 *
 * @package    control_sys
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTelefoneForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nome'       => new sfWidgetFormInputText(),
      'telefone'   => new sfWidgetFormInputText(),
      'cliente_id' => new sfWidgetFormInputHidden(),
      'tipo'       => new sfWidgetFormChoice(array('choices' => array('Administrativo' =>'Administrativo' , 'Técnico' => 'Técnico', ))),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telefone'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cliente_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'required' => false)),
      'tipo'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('telefone[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Telefone';
  }

}

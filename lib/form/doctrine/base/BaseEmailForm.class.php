<?php

/**
 * Email form base class.
 *
 * @method Email getObject() Returns the current form's model object
 *
 * @package    control_sys
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'nome'       => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'cliente_id' => new sfWidgetFormInputHidden(),
      'tipo'       => new sfWidgetFormChoice(array('choices' => array('Administrativo' =>'Administrativo' , 'Técnico' => 'Técnico', ))),
              ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'      => new sfValidatorEmail(),
      'cliente_id' => new sfValidatorInteger(array('required' => true)),
      'tipo'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('email[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Email';
  }

}

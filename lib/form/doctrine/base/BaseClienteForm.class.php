<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    control_sys
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClienteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nome_fantasia'      => new sfWidgetFormInputText(),
      'razao_social'       => new sfWidgetFormInputText(),
      'cpf_cnpj'           => new sfWidgetFormInputText(),
      'endereco'           => new sfWidgetFormInputText(),
      'cep'                => new sfWidgetFormInputText(),
      'bairro'             => new sfWidgetFormInputText(),
      'cidade'             => new sfWidgetFormInputText(),
      'uf'                 => new sfWidgetFormInputText(),
      'responsavel'        => new sfWidgetFormInputText(),
      'responsavel_cpf'    => new sfWidgetFormInputText(),
      'responsavel_end'    => new sfWidgetFormInputText(),
      'responsavel_cep'    => new sfWidgetFormInputText(),
      'responsavel_bairro' => new sfWidgetFormInputText(),
      'responsavel_cidade' => new sfWidgetFormInputText(),
      'responsavel_uf'     => new sfWidgetFormInputText(),
      'situacao'           => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome_fantasia'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'razao_social'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cpf_cnpj'           => new sfValidatorInteger(array('required' => false)),
      'endereco'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'cep'                => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'bairro'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cidade'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'uf'                 => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'responsavel'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'responsavel_cpf'    => new sfValidatorString(array('max_length' => 13, 'required' => false)),
      'responsavel_end'    => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'responsavel_cep'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'responsavel_bairro' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'responsavel_cidade' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'responsavel_uf'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'situacao'           => new sfValidatorInteger(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

}

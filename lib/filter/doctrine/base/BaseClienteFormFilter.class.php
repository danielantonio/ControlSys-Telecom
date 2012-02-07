<?php

/**
 * Cliente filter form base class.
 *
 * @package    control_sys
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClienteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome_fantasia'      => new sfWidgetFormFilterInput(),
      'razao_social'       => new sfWidgetFormFilterInput(),
      'cpf_cnpj'           => new sfWidgetFormFilterInput(),
      'endereco'           => new sfWidgetFormFilterInput(),
      'cep'                => new sfWidgetFormFilterInput(),
      'bairro'             => new sfWidgetFormFilterInput(),
      'cidade'             => new sfWidgetFormFilterInput(),
      'uf'                 => new sfWidgetFormFilterInput(),
      'responsavel'        => new sfWidgetFormFilterInput(),
      'responsavel_cpf'    => new sfWidgetFormFilterInput(),
      'responsavel_end'    => new sfWidgetFormFilterInput(),
      'responsavel_cep'    => new sfWidgetFormFilterInput(),
      'responsavel_bairro' => new sfWidgetFormFilterInput(),
      'responsavel_cidade' => new sfWidgetFormFilterInput(),
      'responsavel_uf'     => new sfWidgetFormFilterInput(),
      'situacao'           => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nome_fantasia'      => new sfValidatorPass(array('required' => false)),
      'razao_social'       => new sfValidatorPass(array('required' => false)),
      'cpf_cnpj'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'endereco'           => new sfValidatorPass(array('required' => false)),
      'cep'                => new sfValidatorPass(array('required' => false)),
      'bairro'             => new sfValidatorPass(array('required' => false)),
      'cidade'             => new sfValidatorPass(array('required' => false)),
      'uf'                 => new sfValidatorPass(array('required' => false)),
      'responsavel'        => new sfValidatorPass(array('required' => false)),
      'responsavel_cpf'    => new sfValidatorPass(array('required' => false)),
      'responsavel_end'    => new sfValidatorPass(array('required' => false)),
      'responsavel_cep'    => new sfValidatorPass(array('required' => false)),
      'responsavel_bairro' => new sfValidatorPass(array('required' => false)),
      'responsavel_cidade' => new sfValidatorPass(array('required' => false)),
      'responsavel_uf'     => new sfValidatorPass(array('required' => false)),
      'situacao'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nome_fantasia'      => 'Text',
      'razao_social'       => 'Text',
      'cpf_cnpj'           => 'Number',
      'endereco'           => 'Text',
      'cep'                => 'Text',
      'bairro'             => 'Text',
      'cidade'             => 'Text',
      'uf'                 => 'Text',
      'responsavel'        => 'Text',
      'responsavel_cpf'    => 'Text',
      'responsavel_end'    => 'Text',
      'responsavel_cep'    => 'Text',
      'responsavel_bairro' => 'Text',
      'responsavel_cidade' => 'Text',
      'responsavel_uf'     => 'Text',
      'situacao'           => 'Number',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}

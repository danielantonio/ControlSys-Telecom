<?php

/**
 * Os filter form base class.
 *
 * @package    control_sys
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'telefone'       => new sfWidgetFormFilterInput(),
      'cliente_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'atendimento_id' => new sfWidgetFormFilterInput(),
      'tipo'           => new sfWidgetFormFilterInput(),
      'descricao'      => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'telefone'       => new sfValidatorPass(array('required' => false)),
      'cliente_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cliente'), 'column' => 'id')),
      'atendimento_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'           => new sfValidatorPass(array('required' => false)),
      'descricao'      => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('os_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Os';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'telefone'       => 'Text',
      'cliente_id'     => 'ForeignKey',
      'atendimento_id' => 'Number',
      'tipo'           => 'Text',
      'descricao'      => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}

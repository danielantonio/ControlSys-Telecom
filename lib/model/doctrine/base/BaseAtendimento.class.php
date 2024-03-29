<?php

/**
 * BaseAtendimento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $descricao
 * @property integer $cliente_id
 * @property string $tipo
 * @property string $numero
 * @property Cliente $Cliente
 * 
 * @method string      getDescricao()  Returns the current record's "descricao" value
 * @method integer     getClienteId()  Returns the current record's "cliente_id" value
 * @method string      getTipo()       Returns the current record's "tipo" value
 * @method string      getNumero()     Returns the current record's "numero" value
 * @method Cliente     getCliente()    Returns the current record's "Cliente" value
 * @method Atendimento setDescricao()  Sets the current record's "descricao" value
 * @method Atendimento setClienteId()  Sets the current record's "cliente_id" value
 * @method Atendimento setTipo()       Sets the current record's "tipo" value
 * @method Atendimento setNumero()     Sets the current record's "numero" value
 * @method Atendimento setCliente()    Sets the current record's "Cliente" value
 * 
 * @package    control_sys
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAtendimento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('atendimento');
        $this->hasColumn('descricao', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('cliente_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tipo', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('numero', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cliente', array(
             'local' => 'cliente_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
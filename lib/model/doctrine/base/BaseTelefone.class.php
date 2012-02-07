<?php

/**
 * BaseTelefone
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $telefone
 * @property integer $cliente_id
 * @property string $tipo
 * @property Cliente $Cliente
 * 
 * @method string   getTelefone()   Returns the current record's "telefone" value
 * @method integer  getClienteId()  Returns the current record's "cliente_id" value
 * @method string   getTipo()       Returns the current record's "tipo" value
 * @method Cliente  getCliente()    Returns the current record's "Cliente" value
 * @method Telefone setTelefone()   Sets the current record's "telefone" value
 * @method Telefone setClienteId()  Sets the current record's "cliente_id" value
 * @method Telefone setTipo()       Sets the current record's "tipo" value
 * @method Telefone setCliente()    Sets the current record's "Cliente" value
 * 
 * @package    control_sys
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTelefone extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('telefone');
        $this->hasColumn('nome', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('telefone', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('cliente_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tipo', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cliente', array(
             'local' => 'cliente_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}
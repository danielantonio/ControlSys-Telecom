<?php

/**
 * cliente actions.
 *
 * @package    control_sys
 * @subpackage cliente
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clienteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->clientes = Doctrine_Core::getTable('Cliente')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->cliente = Doctrine_Core::getTable('Cliente')->find(array($request->getParameter('id')));
    
    $this->forward404Unless($this->cliente);
    $this->emails = Doctrine_Core::getTable('Email')->findBy('cliente_id', $this->cliente->getId());
    $this->telefones = Doctrine_Core::getTable('Telefone')->findBy('cliente_id', $this->cliente->getId());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ClienteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ClienteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($cliente = Doctrine_Core::getTable('Cliente')->find(array($request->getParameter('id'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id')));
    $this->form = new ClienteForm($cliente);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($cliente = Doctrine_Core::getTable('Cliente')->find(array($request->getParameter('id'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id')));
    $this->form = new ClienteForm($cliente);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($cliente = Doctrine_Core::getTable('Cliente')->find(array($request->getParameter('id'))), sprintf('Object cliente does not exist (%s).', $request->getParameter('id')));
    $cliente->delete();

    $this->redirect('cliente/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $cliente = $form->save();

      $this->redirect('cliente/edit?id='.$cliente->getId());
    }
  }
}

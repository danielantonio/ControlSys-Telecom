<?php

/**
 * email actions.
 *
 * @package    control_sys
 * @subpackage email
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class emailActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->emails = Doctrine_Core::getTable('Email')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
      $email = new Email();
      $email->set("cliente_id", $request->getParameter('cliente_id'));
      $this->form = new EmailForm($email);      
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EmailForm();    
    $this->processForm($request, $this->form);
    
    
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($email = Doctrine_Core::getTable('Email')->find(array($request->getParameter('id'))), sprintf('Object email does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmailForm($email);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($email = Doctrine_Core::getTable('Email')->find(array($request->getParameter('id'))), sprintf('Object email does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmailForm($email);
        
    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($email = Doctrine_Core::getTable('Email')->find(array($request->getParameter('id'))), sprintf('Object email does not exist (%s).', $request->getParameter('id')));
    $email->delete();

    $this->redirect('cliente/show?id='.$email->getClienteId());
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $email = $form->save();      
    }
  }
}

<?php

namespace Admin\Controller;

use Zend\View\Model\ViewModel;

use Zend\Mvc\Controller\AbstractActionController;

class ContatosController extends AbstractActionController
{
	public function indexAction()
	{
		$this->getServiceLocator()->get('jv_flashmessenger');
		$contatosService = $this->getServiceLocator()->get('admin_service_contatos');
		$contatos = $contatosService->findAll(null,'object');

		return new ViewModel(array(
			'contatos' => $contatos
		));	
	}

	public function cadastrarAction()
	{
		$form = $this->getServiceLocator()->get('admin_form_contatos');
		$request = $this->getRequest();

		if($request->isPost())
		{
			$form->setInputFilter($this->getServiceLocator()->get('admin_filter_contatos'));
			$form->setData($request->getPost());

			if($form->isValid())
			{
				$data = $form->getData();
				$contatosService = $this->getServiceLocator()->get('admin_service_contatos');
				if($contatosService->insert($data))
				{
					$this->flashMessenger()->addMessage(array('sucess' => 'Contato adicionado com sucesso'));
					$this->redirect()->toUrl('/admin/contatos');
				}
			}
		}


		$view = new ViewModel(array(
			'form' => $form
		));

		$view->setTemplate('admin/contatos/form.phtml');

		return $view;
	}

	public function alterarAction()
	{
		$id = (int) $this->params('id');
		$contatosService = $this->getServiceLocator()->get('admin_service_contatos');

		$contato = $contatosService->findOneBy(array('id' => $id));

		$form = $this->getServiceLocator()->get('admin_form_contatos');
		$form->setData($contato);

		$request = $this->getRequest();

		if($request->isPost())
		{
			$form->setInputFilter($this->getServiceLocator()->get('admin_filter_contatos'));
			$form->setData($request->getPost());

			if($form->isValid())
			{
				$data = $form->getData();
				
				if($contatosService->update($data,array('id'=>$id)))
				{
					$this->flashMessenger()->addMessage(array('sucess' => 'Contato alterado com sucesso'));
					return $this->redirect()->toUrl('/admin/contatos');
				}
			}
		}


		$view = new ViewModel(array(
			'form' => $form
		));

		$view->setTemplate('admin/contatos/form.phtml');

		return $view;


	}

	public function excluirAction()
	{
		$id = (int) $this->params('id');
		$contatosService = $this->getServiceLocator()->get('admin_service_contatos');

		if($contatosService->delete(array('id'=>$id)))
		{
			$this->flashMessenger()->addMessage(array('sucess' => 'Contato excluido com sucesso'));
			return $this->redirect()->toUrl('/admin/contatos');
		}	
	}


}

?>
<?php

namespace Admin\Form;


use Zend\Form\Element\Submit,
	Zend\Form\Element\Email,
	Zend\Form\Element\Text,
	Zend\Form\Form;

class Contatos extends Form
{
	
	public function __construct()
	{
		parent::__construct('formContatos');

		$nome = new Text('nome');
		$nome->setLabel('Nome');
		$this->add($nome);

		$telefone = new Text('telefone');
		$telefone->setLabel('Telefone');
		$this->add($telefone);
		

		$email = new Email('email');
		$email->setLabel('Email');
		$this->add($email);

		$submit = new Submit('submit');
		$submit->setValue('Salvar');
		$this->add($submit);

		$cancelar =  new Submit('cancelar');
		$cancelar->setAttributes(array(
			'type' => 'button',
			'value' => 'Cancelar',
			'onclick' => "document.location.href  = '/admin/contatos'"
		));
		$this->add($cancelar);

	}
}

?>
<?php

namespace Admin\Filter;

use Zend\InputFilter\InputFilter;

class Contatos extends InputFilter
{
	public function __construct()
	{
		$this->add(array(
			'name' => 'nome',
			'allow_empty' => false
		));

		$this->add(array(
			'name' => 'telefone',
			'allow_empty' => false
		));

		$this->add(array(
			'name' => 'email',
			'allow_empty' => false
		));

	}
}

?>

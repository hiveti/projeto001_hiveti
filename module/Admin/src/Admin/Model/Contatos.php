<?php

namespace Admin\Model;

use JVBase\Model\AbstractModel;

class Contatos extends AbstractModel
{
	protected $id;
	protected $nome;
	protected $telefone;
	protected $email;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    $this->nome = $nome;
	}

	public function getTelefone()
	{
	    return "Fone:".$this->telefone;
	}
	
	public function setTelefone($telefone)
	{
	    $this->telefone = $telefone;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    $this->email = $email;
	}

}


?>
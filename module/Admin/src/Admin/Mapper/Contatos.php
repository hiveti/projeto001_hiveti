<?php

namespace Admin\Mapper;

use JVBase\Mapper\AbstractMapper;

class Contatos extends AbstractMapper
{

	protected $model = '\Admin\Model\Contatos';
	protected $table = 'tbl_contatos';
	protected $tableFields = array('id','nome','telefone','email');
	protected $tableKeyFields = array('id');
}

?>
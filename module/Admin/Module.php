<?php
/**
* @autor Raquel Souza Oliveira <raqueloliveiracsi@gmail.com>
* @package 
* @version 0.1
* @datecreation 09/07/2014 (Raquel Oliveira)
* @lastchangedate 09/07/2014 (Raquel Oliveira)
*/

namespace Admin;


class Module
{

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}

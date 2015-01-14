<?php

class CustomerController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function createAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/customer.ini', 'create');
        $this->view->form = new Application_Form_Customer($config);
    }

    public function editAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/customer.ini', 'edit');
        $this->view->form = new Application_Form_Customer($config);
    }


}






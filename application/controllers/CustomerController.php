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
        $dbTable = new Application_Model_DbTable_Customer();
        
        //Seleção de registro
        //$result = $dbTable->fetchRow();

        
        //Insert de registro
        /*$data = array(
            'cpf' => '66555',
            'name' => 'griffin',
            'gender' => 'male',
            'phone' => '311561651',
            'cellphone' => '984516156',
            'email' => 'griffin@familyguy.com.br',
            'street' => 'unknow',
            'house_number' => '32',
            'neighborhood' => 'unknow',
            'cep' => '321241',
            'city' => 'uashda',
            'status' => 'active',
            'monthly_payment' => '30',
            'maturity' => '32',
            'notes' => 'asudhasud',
            
        );
        
        
        if($insert = $dbTable->insert($data))
        {
            echo "xablau";
        }
        else
        {
            echo "nah";
            
        }*/ 
        
        //Update de registro
        /*
        $dataUpdate = array(
            'name' => 'fernando'
        );
        
        
        $update = $dbTable->update($dataUpdate, "name = 'carlos'");
        */
        
        //Delete de registro
        //$delete = $dbTable->delete(array('id = ?' => '13'));
        
    }

    public function editAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/customer.ini', 'edit');
        $this->view->form = new Application_Form_Customer($config);
    }


}






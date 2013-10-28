<?php

/*
  Document   : IndexController
  Created on : 28.10.2013, 11:37:11
  Author     : cawa
  Description:
  Index controller
 */

namespace v1\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel;

class IndexController extends AbstractRestfulController
{

    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $testEntity = $em->getRepository('v1\Entity\Test')->findAll();
        
        //да не хорошее решение, но просто показать подойдёт
        foreach ($testEntity as $entity) {
           $array[] = $entity->getJsonData();
         
        }
        return new JsonModel(array('response' => $array));
    }

}

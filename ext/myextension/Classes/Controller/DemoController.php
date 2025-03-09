<?php

namespace Tobias\myextension\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class DemoController extends ActionController {

    public function showAction(): ResponseInterface
    {

        $testContent = 'Hello World from an extabse plugin';

        $this->view->assign('test',$testContent);

        return $this->htmlResponse();

    }

}
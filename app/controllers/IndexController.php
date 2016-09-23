<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $data = ContentWeb::find();
        $this->view->datacontent = $data;
    }

}


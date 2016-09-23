<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
  public function initialize(){
        // Add some local CSS resources
    $this->assets
      ->addCss('css/summernote.css');
    // And some local JavaScript resources
    $this->assets
      ->addJs('js/summernote.js');
  }
}

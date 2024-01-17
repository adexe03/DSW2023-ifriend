<?php

namespace Dsw\Ifriend\Controllers;

class DefaultController extends Controller{
  public function index() {
    //echo "Estoy en index";
    $router = $this->router;
    echo $this->blade->make('index', compact('router'))->render();
  }
}

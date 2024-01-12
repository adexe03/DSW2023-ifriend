<?php

namespace Dsw\Ifriend\Controllers;

class DefaultController
{
  public function index()
  {
    //echo "Estoy en index";
    global $blade;
    echo $blade->make('index')->render();
  }
}

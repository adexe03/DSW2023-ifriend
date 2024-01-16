<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class UserController
{
  public function index()
  {
    $users = User::all();
    echo "Estoy en user controller";
    echo "<pre>";
    echo $users;
    echo "</pre>";
  }
}

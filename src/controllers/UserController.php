<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class UserController extends Controller {
  public function index() {
    $users = User::all();
    global $blade;
    $router = $this->router;
    echo $blade->make('user.list', compact('users', 'router'))->render();
  }

  public function delete($params) {
    $id = $params['id'];
    $user = User::find($id);
    $user->delete();
    header('Location: /user');
  }
  
  public function create() {
    $router = $this->router;
    echo $this->blade->make('user.create')->render();
  }

  public function post($params) {
    var_dump($params);
  }
  
}

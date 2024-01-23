<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class UserController extends Controller
{

  public function index()
  {
    $users = User::all();
    $router = $this->router;
    echo $this->blade->make('user.list', compact('users', 'router'))->render();
  }

  public function delete($params)
  {
    $id = $params['id'];
    $user = User::find($id);
    $user->delete();
    header('Location: /user');
  }

  public function create()
  {
    $router = $this->router;
    echo $this->blade->make('user.create', compact('router'))->render();
  }

  public function post()
  {
    //var_dump($_POST);
    // HAY QUE HACER: Validación de los datos.
    $user = new User;
    $user->name = $_POST['name'];
    $user->password = $_POST['password'];
    $user->mail = $_POST['mail'];
    $user->save();
    header('Location: /user');
  }

  public function edit($params)
  {
    $id = $params['id'];
    $user = User::find($id);
    $router = $this->router;
    echo $this->blade->make('user.edit', compact('router', 'user'))->render();
  }

  public function update($params)
  {
    $id = $params['id'];
    $user = User::find($id);
    $user->name = $_POST['name'];
    $user->mail = $_POST['mail'];
    $user->password = $_POST['password'];
    $user->save();
    header('Location: /user');
  }
}

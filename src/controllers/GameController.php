<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\Game;

require_once('../src/connection.php');

class GameController extends Controller
{
  public function index()
  {
    //echo "Estoy en index";
    $router = $this->router;
    $games = Game::where([
      'id_admin' => $_SESSION['id']
    ])->get();
    echo $this->blade->make('game.list', compact('games', 'router'))->render();
  }

  public function post()
  {
    $partida = new Game;
    $partida->name = $_POST['name'];
    $partida->id_admin = $_SESSION['id'];
    $partida->save();
    header('Location: /game');
  }

  public function delete($params)
  {
    $id = $params['id'];
    $partida = Game::find($id);
    $partida->delete();
    header('Location: /game');
  }
}

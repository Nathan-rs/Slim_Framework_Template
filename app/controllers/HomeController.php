<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller {

    public function index(Request $request, Response $response) {
        return $this->view($response, 'home', [
            'nome' => 'Fulano',
            'title' => 'Home'
        ]);
    }
}

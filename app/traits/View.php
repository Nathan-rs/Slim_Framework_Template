<?php

namespace app\traits;

use Psr\Http\Message\ResponseInterface;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

trait View
{

    protected $twig;

    protected function twig()
    {
        $loader = new FilesystemLoader('../app/views');

        $this->twig = new Environment($loader, array(
            'debug' => true,
        ));
    }

    protected function functions() {

    }

    protected function load()
    {
        $this->twig();

        $this->functions();
    }

    protected function view(ResponseInterface $response, $view, $data)
    {
        $this->load();

        $template = $this->twig->load(str_replace('.', '/', $view) . '.html');
        // $output = $template->display($data);

        // $response->getBody()->write($output);

        // Retorna o objeto Response modificado
        $template->display($data);

        return $response;
    }
}

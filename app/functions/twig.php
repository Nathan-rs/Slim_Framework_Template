<?php

use \Twig\TwigFunction;

$file_exists = new TwigFunction('file_exists',  function($file) {
    return file_exists($file);
});
<?php

function dd($data) {
    print_r($data);
    die();
}

function json($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
}
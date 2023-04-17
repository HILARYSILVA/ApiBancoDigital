<?php

use API\Controller\Controller;

$url = parse_url($_SERVER['REQUEST_UR1'], PHP_URL_PATH);

switch ($url)
{
    case'/correntista/save';
    break;

    case'/conta/extrato';
    break;

    case'/conta/pix/enviar';
    break;

    case'/conta/pix/receber';
    break;

    case'/correntista/entrar';
    break;

    default:
           http_response_code(403);
        break;
}
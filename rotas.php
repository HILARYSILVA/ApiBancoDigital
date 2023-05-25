<?php

use ApiBancoDigital\Controller\CorrentistaController;

$url = parse_url($_SERVER['REQUEST_UR1'], PHP_URL_PATH);

switch ($url)
{
    case'/correntista/entrar':
        CorrentistaController::entrar();
    break;

    case'/correntista/save':
        CorrentistaController::save();
    break;

    case'/conta/extrato':
        ContaController::extrato();
    break;

    case '/conta/abrir':
        ContaController::abrir();
    break;

    case '/conta/fechar':
        ContaController::fechar();
    break;

    case'/conta/pix/enviar';
    break;

    case'/conta/pix/receber';
    break;

    case '/transacao/pix/enviar':
        TransacaoController::enviarPix();
    break;

    case '/transacao/pix/receber':
        TransacaoController::receberPix();
    break;

    default:
           http_response_code(403);
        break;
}
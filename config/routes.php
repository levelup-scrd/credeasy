<?php

use Sicredi\Credeasy\Controller\Autenticacao\FormularioLogin;


return [
    '/login' => [
        'controller' => FormularioLogin::class,
        'perfis' => ['ANONIMO']
    ]
];


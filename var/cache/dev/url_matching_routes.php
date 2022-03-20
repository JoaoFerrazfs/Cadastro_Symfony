<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/lista' => [[['_route' => 'api_v1_usuariolista', '_controller' => 'App\\Controller\\Api\\UsuarioController::lista'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/cadastra' => [[['_route' => 'api_v1_usuariocadastra', '_controller' => 'App\\Controller\\Api\\UsuarioController::cadatra'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'web_usuario_index', '_controller' => 'App\\Controller\\UsuarioController::index'], null, ['GET' => 0], null, false, false, null]],
        '/salvar' => [[['_route' => 'web_usuario_salvar', '_controller' => 'App\\Controller\\UsuarioController::salvar'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_start', '_controller' => 'App\\Controller\\LoginController::iniciar'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'app_create', '_controller' => 'App\\Controller\\LoginController::create'], null, null, null, false, false, null]],
        '/participantes' => [[['_route' => 'app_participantes', '_controller' => 'App\\Controller\\ParticipantesController::index'], null, null, null, false, false, null]],
        '/medico2024' => [[['_route' => 'app_medico2024', '_controller' => 'App\\Controller\\ParticipantesController::carrerafin'], null, null, null, false, false, null]],
        '/fin2024' => [[['_route' => 'app_fin2024', '_controller' => 'App\\Controller\\ParticipantesController::fin2024'], null, null, null, false, false, null]],
        '/carreracampo' => [[['_route' => 'app_carreracampo', '_controller' => 'App\\Controller\\ParticipantesController::carreracampo'], null, null, null, false, false, null]],
        '/estadisticas' => [[['_route' => 'app_estadisticas', '_controller' => 'App\\Controller\\ParticipantesController::estadisticas'], null, null, null, false, false, null]],
        '/inscribir' => [[['_route' => 'inscribir_participantes', '_controller' => 'App\\Controller\\ParticipantesController::crearParticipante'], null, null, null, false, false, null]],
        '/verparticipante' => [[['_route' => 'medico2023_participantes', '_controller' => 'App\\Controller\\ParticipantesController::verParticipante'], null, null, null, false, false, null]],
        '/numeros' => [[['_route' => 'numeros_participantes', '_controller' => 'App\\Controller\\ParticipantesController::numeros'], null, null, null, false, false, null]],
        '/pruebaemail' => [[['_route' => 'prueba_email', '_controller' => 'App\\Controller\\ParticipantesController::pruebaemail'], null, null, null, false, false, null]],
        '/invitacion' => [[['_route' => 'app_invitacion', '_controller' => 'App\\Controller\\ParticipantesController::invitacion'], null, null, null, false, false, null]],
        '/consultaFoliosMuestra' => [[['_route' => 'app_foliosMuestra', '_controller' => 'App\\Controller\\ParticipantesController::consultaFoliosMuestra'], null, null, null, false, false, null]],
        '/parametrosMuestraOrden' => [[['_route' => 'app_MuestraOrden', '_controller' => 'App\\Controller\\ParticipantesController::parametrosMuestraOrden'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/e(?'
                    .'|nviokit/([^/]++)(*:190)'
                    .'|mail/([^/]++)(*:211)'
                    .'|liminar(?'
                        .'|/([^/]++)(*:238)'
                        .'|_campo/([^/]++)(*:261)'
                    .')'
                .')'
                .'|/agregar(?:/([^/]++))?(*:293)'
                .'|/kitenvio/([^/]++)(*:319)'
                .'|/mail/([^/]++)(*:341)'
                .'|/correo/([^/]++)(*:365)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'app_kit', '_controller' => 'App\\Controller\\ParticipantesController::enviokit'], ['idparticipante'], null, null, false, true, null]],
        211 => [[['_route' => 'send_email', '_controller' => 'App\\Controller\\ParticipantesController::sendEmail'], ['idparticipante'], null, null, false, true, null]],
        238 => [[['_route' => 'app_eliminar', '_controller' => 'App\\Controller\\ParticipantesController::eliminar'], ['idparticipante'], null, null, false, true, null]],
        261 => [[['_route' => 'app_importar', '_controller' => 'App\\Controller\\ParticipantesController::eliminar_campo'], ['idparticipante'], null, null, false, true, null]],
        293 => [[['_route' => 'agregar_participantes', 'idparticipante' => 0, '_controller' => 'App\\Controller\\ParticipantesController::agregarParticipante'], ['idparticipante'], null, null, false, true, null]],
        319 => [[['_route' => 'kit_email', '_controller' => 'App\\Controller\\ParticipantesController::emailkit'], ['idparticipante'], null, null, false, true, null]],
        341 => [[['_route' => 'send_mail', '_controller' => 'App\\Controller\\ParticipantesController::sendEmailprueba'], ['idparticipante'], null, null, false, true, null]],
        365 => [
            [['_route' => 'send_email_2', '_controller' => 'App\\Controller\\ParticipantesController::sendEmailagain'], ['idparticipante'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

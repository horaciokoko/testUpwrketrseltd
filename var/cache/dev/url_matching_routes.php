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
        '/' => [[['_route' => 'market', '_controller' => 'App\\Controller\\MarketController::market'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team_index', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/team/new' => [[['_route' => 'app_team_new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/buy/([^/]++)(*:215)'
                .'|/put\\-on\\-market/([^/]++)(*:248)'
                .'|/retire\\-from\\-market/([^/]++)(*:286)'
                .'|/delete\\-player/([^/]++)(*:318)'
                .'|/edit\\-player/([^/]++)(*:348)'
                .'|/team/([^/]++)(?'
                    .'|(*:373)'
                    .'|/(?'
                        .'|edit(*:389)'
                        .'|delete(*:403)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => 'buy_player', '_controller' => 'App\\Controller\\MarketController::buyPlayer'], ['id'], null, null, false, true, null]],
        248 => [[['_route' => 'put_on_market', '_controller' => 'App\\Controller\\PlayerController::putOnMarket'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        286 => [[['_route' => 'retire_from_market', '_controller' => 'App\\Controller\\PlayerController::retireFromMarket'], ['id'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'delete_player', '_controller' => 'App\\Controller\\PlayerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        348 => [[['_route' => 'edit_player', '_controller' => 'App\\Controller\\PlayerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        373 => [[['_route' => 'team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        389 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [
            [['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

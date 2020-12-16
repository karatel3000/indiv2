<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/City' => [[['_route' => 'City_index', '_controller' => 'App\\Controller\\CityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/City/new' => [[['_route' => 'City_new', '_controller' => 'App\\Controller\\CityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Country' => [[['_route' => 'Country_index', '_controller' => 'App\\Controller\\CountryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Country/new' => [[['_route' => 'Country_new', '_controller' => 'App\\Controller\\CountryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/C(?'
                    .'|ity/(?'
                        .'|([^/]++)(?'
                            .'|(*:65)'
                            .'|/edit(*:77)'
                            .'|(*:84)'
                        .')'
                        .'|find/([^/]++)(*:105)'
                    .')'
                    .'|ountry/(?'
                        .'|find/([^/]++)(*:137)'
                        .'|([^/]++)(?'
                            .'|(*:156)'
                            .'|/edit(*:169)'
                            .'|(*:177)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'City_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'City_edit', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'City_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        105 => [[['_route' => 'find_City_by_name', '_controller' => 'App\\Controller\\CityController::findAllByName'], ['name'], null, null, false, true, null]],
        137 => [[['_route' => 'find_Country_by_name', '_controller' => 'App\\Controller\\CountryController::findAllByName'], ['name'], null, null, false, true, null]],
        156 => [[['_route' => 'Country_show', '_controller' => 'App\\Controller\\CountryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        169 => [[['_route' => 'Country_edit', '_controller' => 'App\\Controller\\CountryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        177 => [
            [['_route' => 'Country_delete', '_controller' => 'App\\Controller\\CountryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

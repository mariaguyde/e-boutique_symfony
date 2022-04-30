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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/order_products' => [[['_route' => 'order_products', '_controller' => 'App\\Controller\\CartController::order_products'], null, null, null, false, false, null]],
        '/cart_update' => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\CartController::cart_update'], null, null, null, false, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/command/line' => [[['_route' => 'command_line_index', '_controller' => 'App\\Controller\\CommandLineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/command/line/new' => [[['_route' => 'command_line_new', '_controller' => 'App\\Controller\\CommandLineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/customer/address' => [[['_route' => 'customer_address_index', '_controller' => 'App\\Controller\\CustomerAddressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/media' => [[['_route' => 'app_media_index', '_controller' => 'App\\Controller\\MediaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/media/new' => [[['_route' => 'app_media_new', '_controller' => 'App\\Controller\\MediaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/order' => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/new' => [[['_route' => 'order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [
            [['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null],
        ],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, false, false, null]],
        '/updateProfilData' => [[['_route' => 'updateProfilData', '_controller' => 'App\\Controller\\UsersController::updateProfilData'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/customeraddress' => [[['_route' => 'customeraddress', '_controller' => 'App\\Form\\CustomerAddressType.php'], null, null, null, true, false, null]],
        '/carnet' => [[['_route' => 'carnet', '_controller' => 'App\\Controller\\ProductController::category'], null, null, null, false, false, null]],
        '/papeterie' => [[['_route' => 'papeterie', '_controller' => 'App\\Controller\\ProductController::category'], null, null, null, false, false, null]],
        '/autres' => [[['_route' => 'autres', '_controller' => 'App\\Controller\\ProductController::category'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategoryController::categorie'], null, null, null, false, false, null]],
        '/addProduct' => [[['_route' => 'product_add', '_controller' => 'App\\Controller\\ProductController::product_add'], null, null, null, false, false, null]],
        '/recap' => [[['_route' => 'recap', '_controller' => 'App\\Controller\\OrderController::recap'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'customer_address_new', '_controller' => 'App\\Controller\\CustomerAddressController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|ommand/line/([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                    .'|ustomer/address/([^/]++)(?'
                        .'|(*:302)'
                        .'|/edit(*:315)'
                        .'|(*:323)'
                    .')'
                .')'
                .'|/media/([^/]++)(?'
                    .'|(*:351)'
                    .'|/edit(*:364)'
                    .'|(*:372)'
                .')'
                .'|/order/([^/]++)(?'
                    .'|(*:399)'
                    .'|/edit(*:412)'
                    .'|(*:420)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:449)'
                    .'|/edit(*:462)'
                    .'|(*:470)'
                .')'
                .'|/u(?'
                    .'|ser/([^/]++)(?'
                        .'|(*:499)'
                        .'|/edit(*:512)'
                        .'|(*:520)'
                    .')'
                    .'|pdateProfil/([^/]++)(*:549)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        245 => [[['_route' => 'command_line_show', '_controller' => 'App\\Controller\\CommandLineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'command_line_edit', '_controller' => 'App\\Controller\\CommandLineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'command_line_delete', '_controller' => 'App\\Controller\\CommandLineController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        302 => [[['_route' => 'customer_address_show', '_controller' => 'App\\Controller\\CustomerAddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'customer_address_edit', '_controller' => 'App\\Controller\\CustomerAddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'customer_address_delete', '_controller' => 'App\\Controller\\CustomerAddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_media_show', '_controller' => 'App\\Controller\\MediaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_media_edit', '_controller' => 'App\\Controller\\MediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [[['_route' => 'app_media_delete', '_controller' => 'App\\Controller\\MediaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        399 => [[['_route' => 'order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        420 => [[['_route' => 'order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        449 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        462 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        470 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        499 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        512 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        520 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        549 => [
            [['_route' => 'updateProfil', '_controller' => 'App\\Controller\\UsersController::updateProfil'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

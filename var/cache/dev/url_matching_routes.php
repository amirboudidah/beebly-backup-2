<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cloture/achat' => [[['_route' => 'app_cloture_achat_index', '_controller' => 'App\\Controller\\ClotureAchatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cloture/achat/mesclotures' => [[['_route' => 'mesclotures', '_controller' => 'App\\Controller\\ClotureAchatController::mesclotures'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/detailslivraison' => [[['_route' => 'app_detailslivraison_index', '_controller' => 'App\\Controller\\DetailslivraisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/detailslivraison/mesLivraisons' => [[['_route' => 'mesLivraisons', '_controller' => 'App\\Controller\\DetailslivraisonController::mesLivraison'], null, ['GET' => 0], null, false, false, null]],
        '/estimationoffrelivre' => [[['_route' => 'app_estimationoffrelivre_index', '_controller' => 'App\\Controller\\EstimationoffrelivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/estimationoffrelivre/mesoffres' => [[['_route' => 'mes_offres', '_controller' => 'App\\Controller\\EstimationoffrelivreController::mesoffres'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/eventSearch' => [[['_route' => 'eventSearch', '_controller' => 'App\\Controller\\EvenementController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/eventsFront' => [[['_route' => 'eventsFront', '_controller' => 'App\\Controller\\EvenementController::eventsFront'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/propositionlivre/liste' => [[['_route' => 'app_propositionlivre_index', '_controller' => 'App\\Controller\\PropositionlivreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/mespropositions' => [[['_route' => 'show_my_propositions', '_controller' => 'App\\Controller\\PropositionlivreController::mesPropositions'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/statistique' => [[['_route' => 'show_my_statistique', '_controller' => 'App\\Controller\\PropositionlivreController::statistique'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/new' => [[['_route' => 'app_propositionlivre_new', '_controller' => 'App\\Controller\\PropositionlivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/dashboardRecl' => [[['_route' => 'app_reclamation_dashboard', '_controller' => 'App\\Controller\\ReclamationController::dashboardRec'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/front' => [[['_route' => 'reclamationFront', '_controller' => 'App\\Controller\\ReclamationController::reclamationFront'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sujet' => [[['_route' => 'app_sujet_index', '_controller' => 'App\\Controller\\SujetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ticket' => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/topic' => [[['_route' => 'app_topic_index', '_controller' => 'App\\Controller\\TopicController::index'], null, ['GET' => 0], null, true, false, null]],
        '/topic/front' => [[['_route' => 'topicFront', '_controller' => 'App\\Controller\\TopicController::topicFront'], null, ['GET' => 0], null, false, false, null]],
        '/topic/new' => [[['_route' => 'app_topic_new', '_controller' => 'App\\Controller\\TopicController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/export/pdf' => [[['_route' => 'pdfUsers', '_controller' => 'App\\Controller\\UserController::pdfd'], null, ['GET' => 0], null, false, false, null]],
        '/user/front/recSearch' => [[['_route' => 'recSearch', '_controller' => 'App\\Controller\\UserController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/front/signin' => [[['_route' => 'app_user_signin', '_controller' => 'App\\Controller\\UserController::signin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/front/signup' => [[['_route' => 'app_user_signup', '_controller' => 'App\\Controller\\UserController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/back/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/back/deleteAccount' => [[['_route' => 'app_user_deleteAccount', '_controller' => 'App\\Controller\\UserController::deleteAccount'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/log/out' => [[['_route' => 'app_user_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/front/profile' => [[['_route' => 'app_user_profilefront', '_controller' => 'App\\Controller\\UserController::profileFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/front/fgtpwd' => [[['_route' => 'app_user_fgtpwd', '_controller' => 'App\\Controller\\UserController::fgtpwd'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|loture/achat/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:43)'
                            .'|macloture(*:59)'
                            .'|edit(*:70)'
                        .')'
                        .'|(*:78)'
                    .')'
                    .'|ommentaire/(?'
                        .'|([^/]++)(*:108)'
                        .'|comment(?'
                            .'|Like/([^/]++)(*:139)'
                            .'|DisLike/([^/]++)(*:163)'
                        .')'
                        .'|([^/]++)(?'
                            .'|/edit(*:188)'
                            .'|(*:196)'
                        .')'
                    .')'
                .')'
                .'|/detailslivraison/([^/]++)(?'
                    .'|/(?'
                        .'|new(*:243)'
                        .'|showMyLivraison(*:266)'
                        .'|edit(*:278)'
                    .')'
                    .'|(*:287)'
                .')'
                .'|/e(?'
                    .'|stimationoffrelivre/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:339)'
                            .'|myEstimation(*:359)'
                            .'|edit(*:371)'
                        .')'
                        .'|(*:380)'
                    .')'
                    .'|venement/(?'
                        .'|eventFilter/([^/]++)(*:421)'
                        .'|([^/]++)(*:437)'
                        .'|showEventFront/([^/]++)(*:468)'
                        .'|([^/]++)(?'
                            .'|/edit(*:492)'
                            .'|(*:500)'
                        .')'
                    .')'
                .')'
                .'|/propositionlivre/([^/]++)(?'
                    .'|(*:540)'
                    .'|/(?'
                        .'|edit(*:556)'
                        .'|showMyProposition(*:581)'
                    .')'
                    .'|(*:590)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|frontRec/([^/]++)(*:635)'
                        .'|([^/]++)(?'
                            .'|(*:654)'
                            .'|/edit(*:667)'
                            .'|(*:675)'
                        .')'
                    .')'
                    .'|ponse/(?'
                        .'|new/([^/]++)(*:706)'
                        .'|([^/]++)(?'
                            .'|(*:725)'
                            .'|/edit(*:738)'
                            .'|(*:746)'
                        .')'
                    .')'
                .')'
                .'|/sujet/(?'
                    .'|new/([^/]++)(*:779)'
                    .'|([^/]++)(*:795)'
                    .'|frontSujet/([^/]++)(*:822)'
                    .'|([^/]++)(?'
                        .'|/edit(*:846)'
                        .'|(*:854)'
                    .')'
                .')'
                .'|/t(?'
                    .'|icket/([^/]++)(?'
                        .'|(*:886)'
                        .'|/edit(*:899)'
                        .'|(*:907)'
                    .')'
                    .'|opic/(?'
                        .'|front/([^/]++)(*:938)'
                        .'|([^/]++)(?'
                            .'|(*:957)'
                            .'|/edit(*:970)'
                            .'|(*:978)'
                        .')'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1009)'
                        .'|/edit(*:1023)'
                    .')'
                    .'|delete/([^/]++)(*:1048)'
                    .'|front/([^/]++)/newpwd(*:1078)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1116)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1156)'
                    .'|wdt/([^/]++)(*:1177)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1224)'
                            .'|router(*:1239)'
                            .'|exception(?'
                                .'|(*:1260)'
                                .'|\\.css(*:1274)'
                            .')'
                        .')'
                        .'|(*:1285)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'app_cloture_achat_new', '_controller' => 'App\\Controller\\ClotureAchatController::new'], ['iddetailslivraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        59 => [[['_route' => 'macloture', '_controller' => 'App\\Controller\\ClotureAchatController::macloture'], ['idCloture'], ['GET' => 0], null, false, false, null]],
        70 => [[['_route' => 'app_cloture_achat_edit', '_controller' => 'App\\Controller\\ClotureAchatController::edit'], ['idCloture'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        78 => [
            [['_route' => 'app_cloture_achat_show', '_controller' => 'App\\Controller\\ClotureAchatController::show'], ['idCloture'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_cloture_achat_delete', '_controller' => 'App\\Controller\\ClotureAchatController::delete'], ['idCloture'], ['POST' => 0], null, false, true, null],
        ],
        108 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'commentLike', '_controller' => 'App\\Controller\\CommentaireController::commentLike'], ['idcom'], ['GET' => 0], null, false, true, null]],
        163 => [[['_route' => 'commentDisLike', '_controller' => 'App\\Controller\\CommentaireController::commentDisLike'], ['idcom'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idcom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        196 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idcom'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_detailslivraison_new', '_controller' => 'App\\Controller\\DetailslivraisonController::new'], ['idestimationoffrelivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'showMyLivraison', '_controller' => 'App\\Controller\\DetailslivraisonController::showMyLivraison'], ['iddetailslivraison'], ['GET' => 0], null, false, false, null]],
        278 => [[['_route' => 'app_detailslivraison_edit', '_controller' => 'App\\Controller\\DetailslivraisonController::edit'], ['iddetailslivraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [
            [['_route' => 'app_detailslivraison_show', '_controller' => 'App\\Controller\\DetailslivraisonController::show'], ['iddetailslivraison'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_detailslivraison_delete', '_controller' => 'App\\Controller\\DetailslivraisonController::delete'], ['iddetailslivraison'], ['POST' => 0], null, false, true, null],
        ],
        339 => [[['_route' => 'app_estimationoffrelivre_new', '_controller' => 'App\\Controller\\EstimationoffrelivreController::new'], ['idpropositionlivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'myEstimation', '_controller' => 'App\\Controller\\EstimationoffrelivreController::myEstimation'], ['idestimationoffrelivre'], ['GET' => 0], null, false, false, null]],
        371 => [[['_route' => 'app_estimationoffrelivre_edit', '_controller' => 'App\\Controller\\EstimationoffrelivreController::edit'], ['idestimationoffrelivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        380 => [
            [['_route' => 'app_estimationoffrelivre_show', '_controller' => 'App\\Controller\\EstimationoffrelivreController::show'], ['idestimationoffrelivre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_estimationoffrelivre_delete', '_controller' => 'App\\Controller\\EstimationoffrelivreController::delete'], ['idestimationoffrelivre'], ['POST' => 0], null, false, true, null],
        ],
        421 => [[['_route' => 'eventFilter', '_controller' => 'App\\Controller\\EvenementController::eventFilter'], ['emplacement'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        437 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'showEventFront', '_controller' => 'App\\Controller\\EvenementController::showEventFront'], ['id'], ['GET' => 0], null, false, true, null]],
        492 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        500 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        540 => [[['_route' => 'app_propositionlivre_show', '_controller' => 'App\\Controller\\PropositionlivreController::show'], ['idpropositionlivre'], ['GET' => 0], null, false, true, null]],
        556 => [[['_route' => 'app_propositionlivre_edit', '_controller' => 'App\\Controller\\PropositionlivreController::edit'], ['idpropositionlivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        581 => [[['_route' => 'app_propositionlivre_show_my_proposition', '_controller' => 'App\\Controller\\PropositionlivreController::showMyProposition'], ['idpropositionlivre'], ['GET' => 0], null, false, false, null]],
        590 => [[['_route' => 'app_propositionlivre_delete', '_controller' => 'App\\Controller\\PropositionlivreController::delete'], ['idpropositionlivre'], ['POST' => 0], null, false, true, null]],
        635 => [[['_route' => 'showFrontt', '_controller' => 'App\\Controller\\ReclamationController::showFrontt'], ['id'], ['GET' => 0], null, false, true, null]],
        654 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        667 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        675 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        706 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        725 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        738 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        746 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        779 => [[['_route' => 'app_sujet_new', '_controller' => 'App\\Controller\\SujetController::new'], ['idtopic'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        795 => [[['_route' => 'app_sujet_show', '_controller' => 'App\\Controller\\SujetController::show'], ['idsujet'], ['GET' => 0], null, false, true, null]],
        822 => [[['_route' => 'frontSujet', '_controller' => 'App\\Controller\\SujetController::frontSujet'], ['idsujet'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        846 => [[['_route' => 'app_sujet_edit', '_controller' => 'App\\Controller\\SujetController::edit'], ['idsujet'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        854 => [[['_route' => 'app_sujet_delete', '_controller' => 'App\\Controller\\SujetController::delete'], ['idsujet'], ['POST' => 0], null, false, true, null]],
        886 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        899 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        907 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        938 => [[['_route' => 'showFront', '_controller' => 'App\\Controller\\TopicController::showTopicAndSubjectsFront'], ['idtopic'], ['GET' => 0], null, false, true, null]],
        957 => [[['_route' => 'app_topic_show', '_controller' => 'App\\Controller\\TopicController::show'], ['idtopic'], ['GET' => 0], null, false, true, null]],
        970 => [[['_route' => 'app_topic_edit', '_controller' => 'App\\Controller\\TopicController::edit'], ['idtopic'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        978 => [[['_route' => 'app_topic_delete', '_controller' => 'App\\Controller\\TopicController::delete'], ['idtopic'], ['POST' => 0], null, false, true, null]],
        1009 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1023 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1048 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1078 => [[['_route' => 'app_user_newpwd', '_controller' => 'App\\Controller\\UserController::newpassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1116 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1156 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1177 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1224 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1239 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1260 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1274 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1285 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

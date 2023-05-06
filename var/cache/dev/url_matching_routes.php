<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/catalogue' => [[['_route' => 'app_catalogue_index', '_controller' => 'App\\Controller\\CatalogueController::livSearch'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/cloture/achat' => [[['_route' => 'app_cloture_achat_index', '_controller' => 'App\\Controller\\ClotureAchatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cloture/achat/mesclotures' => [[['_route' => 'mesclotures', '_controller' => 'App\\Controller\\ClotureAchatController::mesclotures'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/detailslivraison' => [[['_route' => 'app_detailslivraison_index', '_controller' => 'App\\Controller\\DetailslivraisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/detailslivraison/mesLivraisons' => [[['_route' => 'mesLivraisons', '_controller' => 'App\\Controller\\DetailslivraisonController::mesLivraison'], null, ['GET' => 0], null, false, false, null]],
        '/estimationoffrelivre' => [[['_route' => 'app_estimationoffrelivre_index', '_controller' => 'App\\Controller\\EstimationoffrelivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/estimationoffrelivre/mesoffres' => [[['_route' => 'mes_offres', '_controller' => 'App\\Controller\\EstimationoffrelivreController::mesoffres'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/eventSearch' => [[['_route' => 'eventSearch', '_controller' => 'App\\Controller\\EvenementController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/eventsFront' => [[['_route' => 'eventsFront', '_controller' => 'App\\Controller\\EvenementController::eventsFront'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/livre' => [[['_route' => 'app_livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/pdf' => [[['_route' => 'panier_pdf', '_controller' => 'App\\Controller\\PanierController::pdf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/propositionlivre/liste' => [[['_route' => 'app_propositionlivre_index', '_controller' => 'App\\Controller\\PropositionlivreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/mespropositions' => [[['_route' => 'show_my_propositions', '_controller' => 'App\\Controller\\PropositionlivreController::mesPropositions'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/statistique' => [[['_route' => 'show_my_statistique', '_controller' => 'App\\Controller\\PropositionlivreController::statistique'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/new' => [[['_route' => 'app_propositionlivre_new', '_controller' => 'App\\Controller\\PropositionlivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/dashboardRecl' => [[['_route' => 'app_reclamation_dashboard', '_controller' => 'App\\Controller\\ReclamationController::dashboardRec'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/front' => [[['_route' => 'reclamationFront', '_controller' => 'App\\Controller\\ReclamationController::reclamationFront'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/topic/front' => [[['_route' => 'topicFront', '_controller' => 'App\\Controller\\TopicController::topicFront'], null, ['GET' => 0], null, false, false, null]],
        '/topic/new' => [[['_route' => 'app_topic_new', '_controller' => 'App\\Controller\\TopicController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|atalogue/(?'
                        .'|([^/]++)(*:32)'
                        .'|search(*:45)'
                    .')'
                    .'|loture/achat/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:84)'
                            .'|macloture(*:100)'
                            .'|edit(*:112)'
                        .')'
                        .'|(*:121)'
                    .')'
                    .'|ommentaire/(?'
                        .'|([^/]++)(*:152)'
                        .'|comment(?'
                            .'|Like/([^/]++)(*:183)'
                            .'|DisLike/([^/]++)(*:207)'
                        .')'
                    .')'
                .')'
                .'|/detailslivraison/([^/]++)(?'
                    .'|/(?'
                        .'|new(*:254)'
                        .'|showMyLivraison(*:277)'
                        .'|edit(*:289)'
                    .')'
                    .'|(*:298)'
                .')'
                .'|/e(?'
                    .'|stimationoffrelivre/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:350)'
                            .'|myEstimation(*:370)'
                            .'|edit(*:382)'
                        .')'
                        .'|(*:391)'
                    .')'
                    .'|venement/(?'
                        .'|eventFilter/([^/]++)(*:432)'
                        .'|([^/]++)(*:448)'
                        .'|showEventFront/([^/]++)(*:479)'
                        .'|([^/]++)(?'
                            .'|/edit(*:503)'
                            .'|(*:511)'
                        .')'
                    .')'
                .')'
                .'|/livre/([^/]++)(*:537)'
                .'|/([^/]++)(?'
                    .'|/edit(*:562)'
                    .'|(*:570)'
                .')'
                .'|/p(?'
                    .'|anier(?'
                        .'|(*:592)'
                        .'|/(?'
                            .'|add/([^/]++)(*:616)'
                            .'|remove/([^/]++)(*:639)'
                        .')'
                    .')'
                    .'|ropositionlivre/([^/]++)(?'
                        .'|(*:676)'
                        .'|/(?'
                            .'|edit(*:692)'
                            .'|showMyProposition(*:717)'
                        .')'
                        .'|(*:726)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation(?'
                        .'|(*:754)'
                        .'|/(?'
                            .'|frontRec/([^/]++)(*:783)'
                            .'|([^/]++)(?'
                                .'|(*:802)'
                                .'|/edit(*:815)'
                                .'|(*:823)'
                            .')'
                        .')'
                    .')'
                    .'|gister(*:840)'
                    .'|ponse(?'
                        .'|(*:856)'
                        .'|/(?'
                            .'|new/([^/]++)(*:880)'
                            .'|([^/]++)(?'
                                .'|(*:899)'
                                .'|/edit(*:912)'
                                .'|(*:920)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/log(?'
                    .'|in(*:941)'
                    .'|out(*:952)'
                .')'
                .'|/sujet(?'
                    .'|(*:970)'
                    .'|/(?'
                        .'|new/([^/]++)(*:994)'
                        .'|([^/]++)(*:1010)'
                        .'|frontSujet/([^/]++)(*:1038)'
                        .'|([^/]++)(?'
                            .'|/edit(*:1063)'
                            .'|(*:1072)'
                        .')'
                    .')'
                .')'
                .'|/t(?'
                    .'|icket(?'
                        .'|(*:1097)'
                        .'|/([^/]++)(?'
                            .'|(*:1118)'
                            .'|/edit(*:1132)'
                            .'|(*:1141)'
                        .')'
                    .')'
                    .'|opic(?'
                        .'|(*:1159)'
                        .'|/(?'
                            .'|front/([^/]++)(*:1186)'
                            .'|([^/]++)(?'
                                .'|(*:1206)'
                                .'|/edit(*:1220)'
                                .'|(*:1229)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/user(?'
                    .'|(*:1250)'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:1274)'
                            .'|/edit(*:1288)'
                        .')'
                        .'|delete/([^/]++)(*:1313)'
                        .'|front/([^/]++)/newpwd(*:1343)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1382)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1422)'
                    .'|wdt/([^/]++)(*:1443)'
                    .'|profiler(?'
                        .'|(*:1463)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1502)'
                                .'|router(*:1517)'
                                .'|exception(?'
                                    .'|(*:1538)'
                                    .'|\\.css(*:1552)'
                                .')'
                            .')'
                            .'|(*:1563)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_catalogue_show', '_controller' => 'App\\Controller\\CatalogueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'reqSearch_search', '_controller' => 'App\\Controller\\CatalogueController::search'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'app_cloture_achat_new', '_controller' => 'App\\Controller\\ClotureAchatController::new'], ['iddetailslivraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'macloture', '_controller' => 'App\\Controller\\ClotureAchatController::macloture'], ['idCloture'], ['GET' => 0], null, false, false, null]],
        112 => [[['_route' => 'app_cloture_achat_edit', '_controller' => 'App\\Controller\\ClotureAchatController::edit'], ['idCloture'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        121 => [
            [['_route' => 'app_cloture_achat_show', '_controller' => 'App\\Controller\\ClotureAchatController::show'], ['idCloture'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_cloture_achat_delete', '_controller' => 'App\\Controller\\ClotureAchatController::delete'], ['idCloture'], ['POST' => 0], null, false, true, null],
        ],
        152 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        183 => [[['_route' => 'commentLike', '_controller' => 'App\\Controller\\CommentaireController::commentLike'], ['idcom'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'commentDisLike', '_controller' => 'App\\Controller\\CommentaireController::commentDisLike'], ['idcom'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_detailslivraison_new', '_controller' => 'App\\Controller\\DetailslivraisonController::new'], ['idestimationoffrelivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        277 => [[['_route' => 'showMyLivraison', '_controller' => 'App\\Controller\\DetailslivraisonController::showMyLivraison'], ['iddetailslivraison'], ['GET' => 0], null, false, false, null]],
        289 => [[['_route' => 'app_detailslivraison_edit', '_controller' => 'App\\Controller\\DetailslivraisonController::edit'], ['iddetailslivraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        298 => [
            [['_route' => 'app_detailslivraison_show', '_controller' => 'App\\Controller\\DetailslivraisonController::show'], ['iddetailslivraison'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_detailslivraison_delete', '_controller' => 'App\\Controller\\DetailslivraisonController::delete'], ['iddetailslivraison'], ['POST' => 0], null, false, true, null],
        ],
        350 => [[['_route' => 'app_estimationoffrelivre_new', '_controller' => 'App\\Controller\\EstimationoffrelivreController::new'], ['idpropositionlivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'myEstimation', '_controller' => 'App\\Controller\\EstimationoffrelivreController::myEstimation'], ['idestimationoffrelivre'], ['GET' => 0], null, false, false, null]],
        382 => [[['_route' => 'app_estimationoffrelivre_edit', '_controller' => 'App\\Controller\\EstimationoffrelivreController::edit'], ['idestimationoffrelivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        391 => [
            [['_route' => 'app_estimationoffrelivre_show', '_controller' => 'App\\Controller\\EstimationoffrelivreController::show'], ['idestimationoffrelivre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_estimationoffrelivre_delete', '_controller' => 'App\\Controller\\EstimationoffrelivreController::delete'], ['idestimationoffrelivre'], ['POST' => 0], null, false, true, null],
        ],
        432 => [[['_route' => 'eventFilter', '_controller' => 'App\\Controller\\EvenementController::eventFilter'], ['emplacement'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        448 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'showEventFront', '_controller' => 'App\\Controller\\EvenementController::showEventFront'], ['id'], ['GET' => 0], null, false, true, null]],
        503 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        511 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        537 => [[['_route' => 'app_livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        562 => [[['_route' => 'app_livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        570 => [[['_route' => 'app_livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        592 => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], [], null, null, false, false, null]],
        616 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        639 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        676 => [[['_route' => 'app_propositionlivre_show', '_controller' => 'App\\Controller\\PropositionlivreController::show'], ['idpropositionlivre'], ['GET' => 0], null, false, true, null]],
        692 => [[['_route' => 'app_propositionlivre_edit', '_controller' => 'App\\Controller\\PropositionlivreController::edit'], ['idpropositionlivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        717 => [[['_route' => 'app_propositionlivre_show_my_proposition', '_controller' => 'App\\Controller\\PropositionlivreController::showMyProposition'], ['idpropositionlivre'], ['GET' => 0], null, false, false, null]],
        726 => [[['_route' => 'app_propositionlivre_delete', '_controller' => 'App\\Controller\\PropositionlivreController::delete'], ['idpropositionlivre'], ['POST' => 0], null, false, true, null]],
        754 => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], [], ['GET' => 0], null, true, false, null]],
        783 => [[['_route' => 'showFrontt', '_controller' => 'App\\Controller\\ReclamationController::showFrontt'], ['id'], ['GET' => 0], null, false, true, null]],
        802 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        815 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        823 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        840 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        856 => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], [], ['GET' => 0], null, true, false, null]],
        880 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        899 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        912 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        920 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        941 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        952 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        970 => [[['_route' => 'app_sujet_index', '_controller' => 'App\\Controller\\SujetController::index'], [], ['GET' => 0], null, true, false, null]],
        994 => [[['_route' => 'app_sujet_new', '_controller' => 'App\\Controller\\SujetController::new'], ['idtopic'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1010 => [[['_route' => 'app_sujet_show', '_controller' => 'App\\Controller\\SujetController::show'], ['idsujet'], ['GET' => 0], null, false, true, null]],
        1038 => [[['_route' => 'frontSujet', '_controller' => 'App\\Controller\\SujetController::frontSujet'], ['idsujet'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1063 => [[['_route' => 'app_sujet_edit', '_controller' => 'App\\Controller\\SujetController::edit'], ['idsujet'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1072 => [[['_route' => 'app_sujet_delete', '_controller' => 'App\\Controller\\SujetController::delete'], ['idsujet'], ['POST' => 0], null, false, true, null]],
        1097 => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], [], ['GET' => 0], null, true, false, null]],
        1118 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1132 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1141 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1159 => [[['_route' => 'app_topic_index', '_controller' => 'App\\Controller\\TopicController::index'], [], ['GET' => 0], null, true, false, null]],
        1186 => [[['_route' => 'showFront', '_controller' => 'App\\Controller\\TopicController::showTopicAndSubjectsFront'], ['idtopic'], ['GET' => 0], null, false, true, null]],
        1206 => [[['_route' => 'app_topic_show', '_controller' => 'App\\Controller\\TopicController::show'], ['idtopic'], ['GET' => 0], null, false, true, null]],
        1220 => [[['_route' => 'app_topic_edit', '_controller' => 'App\\Controller\\TopicController::edit'], ['idtopic'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1229 => [[['_route' => 'app_topic_delete', '_controller' => 'App\\Controller\\TopicController::delete'], ['idtopic'], ['POST' => 0], null, false, true, null]],
        1250 => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], [], ['GET' => 0], null, true, false, null]],
        1274 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1288 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1313 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1343 => [[['_route' => 'app_user_newpwd', '_controller' => 'App\\Controller\\UserController::newpassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1382 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1422 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1443 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1463 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        1502 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1517 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1538 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1552 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1563 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

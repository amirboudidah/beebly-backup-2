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
        '/livre' => [[['_route' => 'app_livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livre/new' => [[['_route' => 'app_livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/panier/pdf' => [[['_route' => 'panier_pdf', '_controller' => 'App\\Controller\\PanierController::pdf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PanierController::checkout'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\PanierController::success'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\PanierController::error'], null, null, null, false, false, null]],
        '/propositionlivre/liste' => [[['_route' => 'app_propositionlivre_index', '_controller' => 'App\\Controller\\PropositionlivreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/mespropositions' => [[['_route' => 'show_my_propositions', '_controller' => 'App\\Controller\\PropositionlivreController::mesPropositions'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/statistique' => [[['_route' => 'show_my_statistique', '_controller' => 'App\\Controller\\PropositionlivreController::statistique'], null, ['GET' => 0], null, false, false, null]],
        '/propositionlivre/new' => [[['_route' => 'app_propositionlivre_new', '_controller' => 'App\\Controller\\PropositionlivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/dashboardRecl' => [[['_route' => 'app_reclamation_dashboard', '_controller' => 'App\\Controller\\ReclamationController::dashboardRec'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/front' => [[['_route' => 'reclamationFront', '_controller' => 'App\\Controller\\ReclamationController::reclamationFront'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                    .'|atalogue/(?'
                        .'|([^/]++)(*:32)'
                        .'|add\\-to\\-favorites/([^/]++)(*:66)'
                        .'|serach(*:79)'
                    .')'
                    .'|loture/achat/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:118)'
                            .'|macloture(*:135)'
                            .'|edit(*:147)'
                        .')'
                        .'|(*:156)'
                    .')'
                    .'|ommentaire/(?'
                        .'|([^/]++)(*:187)'
                        .'|comment(?'
                            .'|Like/([^/]++)(*:218)'
                            .'|DisLike/([^/]++)(*:242)'
                        .')'
                    .')'
                .')'
                .'|/detailslivraison/([^/]++)(?'
                    .'|/(?'
                        .'|new(*:289)'
                        .'|showMyLivraison(*:312)'
                        .'|edit(*:324)'
                    .')'
                    .'|(*:333)'
                .')'
                .'|/e(?'
                    .'|stimationoffrelivre/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:385)'
                            .'|myEstimation(*:405)'
                            .'|edit(*:417)'
                        .')'
                        .'|(*:426)'
                    .')'
                    .'|venement/(?'
                        .'|eventFilter/([^/]++)(*:467)'
                        .'|([^/]++)(*:483)'
                        .'|showEventFront/([^/]++)(*:514)'
                        .'|([^/]++)(?'
                            .'|/edit(*:538)'
                            .'|(*:546)'
                        .')'
                    .')'
                .')'
                .'|/livre/([^/]++)(?'
                    .'|(*:575)'
                    .'|/edit(*:588)'
                    .'|(*:596)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:631)'
                        .'|remove/([^/]++)(*:654)'
                    .')'
                    .'|ropositionlivre/([^/]++)(?'
                        .'|(*:690)'
                        .'|/(?'
                            .'|edit(*:706)'
                            .'|showMyProposition(*:731)'
                        .')'
                        .'|(*:740)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|frontRec/([^/]++)(*:786)'
                        .'|([^/]++)(?'
                            .'|(*:805)'
                            .'|/edit(*:818)'
                            .'|(*:826)'
                        .')'
                    .')'
                    .'|ponse/(?'
                        .'|new/([^/]++)(*:857)'
                        .'|([^/]++)(?'
                            .'|(*:876)'
                            .'|/edit(*:889)'
                            .'|(*:897)'
                        .')'
                    .')'
                .')'
                .'|/sujet/(?'
                    .'|new/([^/]++)(*:930)'
                    .'|([^/]++)(*:946)'
                    .'|frontSujet/([^/]++)(*:973)'
                    .'|([^/]++)(?'
                        .'|/edit(*:997)'
                        .'|(*:1005)'
                    .')'
                .')'
                .'|/t(?'
                    .'|icket/([^/]++)(?'
                        .'|(*:1038)'
                        .'|/edit(*:1052)'
                        .'|(*:1061)'
                    .')'
                    .'|opic/(?'
                        .'|front/([^/]++)(*:1093)'
                        .'|([^/]++)(?'
                            .'|(*:1113)'
                            .'|/edit(*:1127)'
                            .'|(*:1136)'
                        .')'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1168)'
                        .'|/edit(*:1182)'
                    .')'
                    .'|delete/([^/]++)(*:1207)'
                    .'|front/([^/]++)/newpwd(*:1237)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1275)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1315)'
                    .'|wdt/([^/]++)(*:1336)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1383)'
                            .'|router(*:1398)'
                            .'|exception(?'
                                .'|(*:1419)'
                                .'|\\.css(*:1433)'
                            .')'
                        .')'
                        .'|(*:1444)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_catalogue_show', '_controller' => 'App\\Controller\\CatalogueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        66 => [[['_route' => 'add_to_favorites', '_controller' => 'App\\Controller\\CatalogueController::addToFavorites'], ['id'], null, null, false, true, null]],
        79 => [[['_route' => 'reqSearch_search', '_controller' => 'App\\Controller\\CatalogueController::search'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        118 => [[['_route' => 'app_cloture_achat_new', '_controller' => 'App\\Controller\\ClotureAchatController::new'], ['iddetailslivraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        135 => [[['_route' => 'macloture', '_controller' => 'App\\Controller\\ClotureAchatController::macloture'], ['idCloture'], ['GET' => 0], null, false, false, null]],
        147 => [[['_route' => 'app_cloture_achat_edit', '_controller' => 'App\\Controller\\ClotureAchatController::edit'], ['idCloture'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        156 => [
            [['_route' => 'app_cloture_achat_show', '_controller' => 'App\\Controller\\ClotureAchatController::show'], ['idCloture'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_cloture_achat_delete', '_controller' => 'App\\Controller\\ClotureAchatController::delete'], ['idCloture'], ['POST' => 0], null, false, true, null],
        ],
        187 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idcom'], ['GET' => 0], null, false, true, null]],
        218 => [[['_route' => 'commentLike', '_controller' => 'App\\Controller\\CommentaireController::commentLike'], ['idcom'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'commentDisLike', '_controller' => 'App\\Controller\\CommentaireController::commentDisLike'], ['idcom'], ['GET' => 0], null, false, true, null]],
        289 => [[['_route' => 'app_detailslivraison_new', '_controller' => 'App\\Controller\\DetailslivraisonController::new'], ['idestimationoffrelivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'showMyLivraison', '_controller' => 'App\\Controller\\DetailslivraisonController::showMyLivraison'], ['iddetailslivraison'], ['GET' => 0], null, false, false, null]],
        324 => [[['_route' => 'app_detailslivraison_edit', '_controller' => 'App\\Controller\\DetailslivraisonController::edit'], ['iddetailslivraison'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [
            [['_route' => 'app_detailslivraison_show', '_controller' => 'App\\Controller\\DetailslivraisonController::show'], ['iddetailslivraison'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_detailslivraison_delete', '_controller' => 'App\\Controller\\DetailslivraisonController::delete'], ['iddetailslivraison'], ['POST' => 0], null, false, true, null],
        ],
        385 => [[['_route' => 'app_estimationoffrelivre_new', '_controller' => 'App\\Controller\\EstimationoffrelivreController::new'], ['idpropositionlivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        405 => [[['_route' => 'myEstimation', '_controller' => 'App\\Controller\\EstimationoffrelivreController::myEstimation'], ['idestimationoffrelivre'], ['GET' => 0], null, false, false, null]],
        417 => [[['_route' => 'app_estimationoffrelivre_edit', '_controller' => 'App\\Controller\\EstimationoffrelivreController::edit'], ['idestimationoffrelivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        426 => [
            [['_route' => 'app_estimationoffrelivre_show', '_controller' => 'App\\Controller\\EstimationoffrelivreController::show'], ['idestimationoffrelivre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_estimationoffrelivre_delete', '_controller' => 'App\\Controller\\EstimationoffrelivreController::delete'], ['idestimationoffrelivre'], ['POST' => 0], null, false, true, null],
        ],
        467 => [[['_route' => 'eventFilter', '_controller' => 'App\\Controller\\EvenementController::eventFilter'], ['emplacement'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        483 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        514 => [[['_route' => 'showEventFront', '_controller' => 'App\\Controller\\EvenementController::showEventFront'], ['id'], ['GET' => 0], null, false, true, null]],
        538 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        546 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        575 => [[['_route' => 'app_livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        596 => [[['_route' => 'app_livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        631 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        654 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        690 => [[['_route' => 'app_propositionlivre_show', '_controller' => 'App\\Controller\\PropositionlivreController::show'], ['idpropositionlivre'], ['GET' => 0], null, false, true, null]],
        706 => [[['_route' => 'app_propositionlivre_edit', '_controller' => 'App\\Controller\\PropositionlivreController::edit'], ['idpropositionlivre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        731 => [[['_route' => 'app_propositionlivre_show_my_proposition', '_controller' => 'App\\Controller\\PropositionlivreController::showMyProposition'], ['idpropositionlivre'], ['GET' => 0], null, false, false, null]],
        740 => [[['_route' => 'app_propositionlivre_delete', '_controller' => 'App\\Controller\\PropositionlivreController::delete'], ['idpropositionlivre'], ['POST' => 0], null, false, true, null]],
        786 => [[['_route' => 'showFrontt', '_controller' => 'App\\Controller\\ReclamationController::showFrontt'], ['id'], ['GET' => 0], null, false, true, null]],
        805 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        818 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        826 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        857 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        876 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        889 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        897 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        930 => [[['_route' => 'app_sujet_new', '_controller' => 'App\\Controller\\SujetController::new'], ['idtopic'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        946 => [[['_route' => 'app_sujet_show', '_controller' => 'App\\Controller\\SujetController::show'], ['idsujet'], ['GET' => 0], null, false, true, null]],
        973 => [[['_route' => 'frontSujet', '_controller' => 'App\\Controller\\SujetController::frontSujet'], ['idsujet'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        997 => [[['_route' => 'app_sujet_edit', '_controller' => 'App\\Controller\\SujetController::edit'], ['idsujet'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1005 => [[['_route' => 'app_sujet_delete', '_controller' => 'App\\Controller\\SujetController::delete'], ['idsujet'], ['POST' => 0], null, false, true, null]],
        1038 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1052 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1061 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1093 => [[['_route' => 'showFront', '_controller' => 'App\\Controller\\TopicController::showTopicAndSubjectsFront'], ['idtopic'], ['GET' => 0], null, false, true, null]],
        1113 => [[['_route' => 'app_topic_show', '_controller' => 'App\\Controller\\TopicController::show'], ['idtopic'], ['GET' => 0], null, false, true, null]],
        1127 => [[['_route' => 'app_topic_edit', '_controller' => 'App\\Controller\\TopicController::edit'], ['idtopic'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1136 => [[['_route' => 'app_topic_delete', '_controller' => 'App\\Controller\\TopicController::delete'], ['idtopic'], ['POST' => 0], null, false, true, null]],
        1168 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1182 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1207 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1237 => [[['_route' => 'app_user_newpwd', '_controller' => 'App\\Controller\\UserController::newpassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1275 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1315 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1336 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1383 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1398 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1419 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1433 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1444 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

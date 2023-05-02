<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_catalogue_show' => [['id'], ['_controller' => 'App\\Controller\\CatalogueController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catalogue']], [], [], []],
    'add_to_favorites' => [['id'], ['_controller' => 'App\\Controller\\CatalogueController::addToFavorites'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catalogue/add-to-favorites']], [], [], []],
    'reqSearch_search' => [[], ['_controller' => 'App\\Controller\\CatalogueController::search'], [], [['text', '/catalogue/serach']], [], [], []],
    'app_catalogue_index' => [[], ['_controller' => 'App\\Controller\\CatalogueController::livSearch'], [], [['text', '/catalogue/']], [], [], []],
    'app_cloture_achat_index' => [[], ['_controller' => 'App\\Controller\\ClotureAchatController::index'], [], [['text', '/cloture/achat/']], [], [], []],
    'mesclotures' => [[], ['_controller' => 'App\\Controller\\ClotureAchatController::mesclotures'], [], [['text', '/cloture/achat/mesclotures']], [], [], []],
    'app_cloture_achat_new' => [['iddetailslivraison'], ['_controller' => 'App\\Controller\\ClotureAchatController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'iddetailslivraison', true], ['text', '/cloture/achat']], [], [], []],
    'app_cloture_achat_show' => [['idCloture'], ['_controller' => 'App\\Controller\\ClotureAchatController::show'], [], [['variable', '/', '[^/]++', 'idCloture', true], ['text', '/cloture/achat']], [], [], []],
    'macloture' => [['idCloture'], ['_controller' => 'App\\Controller\\ClotureAchatController::macloture'], [], [['text', '/macloture'], ['variable', '/', '[^/]++', 'idCloture', true], ['text', '/cloture/achat']], [], [], []],
    'app_cloture_achat_edit' => [['idCloture'], ['_controller' => 'App\\Controller\\ClotureAchatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCloture', true], ['text', '/cloture/achat']], [], [], []],
    'app_cloture_achat_delete' => [['idCloture'], ['_controller' => 'App\\Controller\\ClotureAchatController::delete'], [], [['variable', '/', '[^/]++', 'idCloture', true], ['text', '/cloture/achat']], [], [], []],
    'app_commentaire_index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire/']], [], [], []],
    'app_commentaire_new' => [[], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['text', '/commentaire/new']], [], [], []],
    'app_commentaire_show' => [['idcom'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'idcom', true], ['text', '/commentaire']], [], [], []],
    'commentLike' => [['idcom'], ['_controller' => 'App\\Controller\\CommentaireController::commentLike'], [], [['variable', '/', '[^/]++', 'idcom', true], ['text', '/commentaire/commentLike']], [], [], []],
    'commentDisLike' => [['idcom'], ['_controller' => 'App\\Controller\\CommentaireController::commentDisLike'], [], [['variable', '/', '[^/]++', 'idcom', true], ['text', '/commentaire/commentDisLike']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_detailslivraison_index' => [[], ['_controller' => 'App\\Controller\\DetailslivraisonController::index'], [], [['text', '/detailslivraison/']], [], [], []],
    'mesLivraisons' => [[], ['_controller' => 'App\\Controller\\DetailslivraisonController::mesLivraison'], [], [['text', '/detailslivraison/mesLivraisons']], [], [], []],
    'app_detailslivraison_new' => [['idestimationoffrelivre'], ['_controller' => 'App\\Controller\\DetailslivraisonController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'idestimationoffrelivre', true], ['text', '/detailslivraison']], [], [], []],
    'app_detailslivraison_show' => [['iddetailslivraison'], ['_controller' => 'App\\Controller\\DetailslivraisonController::show'], [], [['variable', '/', '[^/]++', 'iddetailslivraison', true], ['text', '/detailslivraison']], [], [], []],
    'showMyLivraison' => [['iddetailslivraison'], ['_controller' => 'App\\Controller\\DetailslivraisonController::showMyLivraison'], [], [['text', '/showMyLivraison'], ['variable', '/', '[^/]++', 'iddetailslivraison', true], ['text', '/detailslivraison']], [], [], []],
    'app_detailslivraison_edit' => [['iddetailslivraison'], ['_controller' => 'App\\Controller\\DetailslivraisonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'iddetailslivraison', true], ['text', '/detailslivraison']], [], [], []],
    'app_detailslivraison_delete' => [['iddetailslivraison'], ['_controller' => 'App\\Controller\\DetailslivraisonController::delete'], [], [['variable', '/', '[^/]++', 'iddetailslivraison', true], ['text', '/detailslivraison']], [], [], []],
    'app_estimationoffrelivre_index' => [[], ['_controller' => 'App\\Controller\\EstimationoffrelivreController::index'], [], [['text', '/estimationoffrelivre/']], [], [], []],
    'mes_offres' => [[], ['_controller' => 'App\\Controller\\EstimationoffrelivreController::mesoffres'], [], [['text', '/estimationoffrelivre/mesoffres']], [], [], []],
    'app_estimationoffrelivre_new' => [['idpropositionlivre'], ['_controller' => 'App\\Controller\\EstimationoffrelivreController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'idpropositionlivre', true], ['text', '/estimationoffrelivre']], [], [], []],
    'myEstimation' => [['idestimationoffrelivre'], ['_controller' => 'App\\Controller\\EstimationoffrelivreController::myEstimation'], [], [['text', '/myEstimation'], ['variable', '/', '[^/]++', 'idestimationoffrelivre', true], ['text', '/estimationoffrelivre']], [], [], []],
    'app_estimationoffrelivre_show' => [['idestimationoffrelivre'], ['_controller' => 'App\\Controller\\EstimationoffrelivreController::show'], [], [['variable', '/', '[^/]++', 'idestimationoffrelivre', true], ['text', '/estimationoffrelivre']], [], [], []],
    'app_estimationoffrelivre_edit' => [['idestimationoffrelivre'], ['_controller' => 'App\\Controller\\EstimationoffrelivreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idestimationoffrelivre', true], ['text', '/estimationoffrelivre']], [], [], []],
    'app_estimationoffrelivre_delete' => [['idestimationoffrelivre'], ['_controller' => 'App\\Controller\\EstimationoffrelivreController::delete'], [], [['variable', '/', '[^/]++', 'idestimationoffrelivre', true], ['text', '/estimationoffrelivre']], [], [], []],
    'eventFilter' => [['emplacement'], ['_controller' => 'App\\Controller\\EvenementController::eventFilter'], [], [['variable', '/', '[^/]++', 'emplacement', true], ['text', '/evenement/eventFilter']], [], [], []],
    'eventSearch' => [[], ['_controller' => 'App\\Controller\\EvenementController::search'], [], [['text', '/evenement/eventSearch']], [], [], []],
    'app_evenement_index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement/']], [], [], []],
    'eventsFront' => [[], ['_controller' => 'App\\Controller\\EvenementController::eventsFront'], [], [['text', '/evenement/eventsFront']], [], [], []],
    'app_evenement_new' => [[], ['_controller' => 'App\\Controller\\EvenementController::new'], [], [['text', '/evenement/new']], [], [], []],
    'app_evenement_show' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'showEventFront' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::showEventFront'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/showEventFront']], [], [], []],
    'app_evenement_edit' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_delete' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_livre_index' => [[], ['_controller' => 'App\\Controller\\LivreController::index'], [], [['text', '/livre/']], [], [], []],
    'app_livre_new' => [[], ['_controller' => 'App\\Controller\\LivreController::new'], [], [['text', '/livre/new']], [], [], []],
    'app_livre_show' => [['id'], ['_controller' => 'App\\Controller\\LivreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/livre']], [], [], []],
    'app_livre_edit' => [['id'], ['_controller' => 'App\\Controller\\LivreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/livre']], [], [], []],
    'app_livre_delete' => [['id'], ['_controller' => 'App\\Controller\\LivreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/livre']], [], [], []],
    'app_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier']], [], [], []],
    'panier_add' => [['id'], ['_controller' => 'App\\Controller\\PanierController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/add']], [], [], []],
    'panier_remove' => [['id'], ['_controller' => 'App\\Controller\\PanierController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/remove']], [], [], []],
    'panier_pdf' => [[], ['_controller' => 'App\\Controller\\PanierController::pdf'], [], [['text', '/panier/pdf']], [], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\PanierController::checkout'], [], [['text', '/create-checkout-session']], [], [], []],
    'success' => [[], ['_controller' => 'App\\Controller\\PanierController::success'], [], [['text', '/success']], [], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\PanierController::error'], [], [['text', '/error']], [], [], []],
    'app_propositionlivre_index' => [[], ['_controller' => 'App\\Controller\\PropositionlivreController::index'], [], [['text', '/propositionlivre/liste']], [], [], []],
    'show_my_propositions' => [[], ['_controller' => 'App\\Controller\\PropositionlivreController::mesPropositions'], [], [['text', '/propositionlivre/mespropositions']], [], [], []],
    'show_my_statistique' => [[], ['_controller' => 'App\\Controller\\PropositionlivreController::statistique'], [], [['text', '/propositionlivre/statistique']], [], [], []],
    'app_propositionlivre_new' => [[], ['_controller' => 'App\\Controller\\PropositionlivreController::new'], [], [['text', '/propositionlivre/new']], [], [], []],
    'app_propositionlivre_show' => [['idpropositionlivre'], ['_controller' => 'App\\Controller\\PropositionlivreController::show'], [], [['variable', '/', '[^/]++', 'idpropositionlivre', true], ['text', '/propositionlivre']], [], [], []],
    'app_propositionlivre_edit' => [['idpropositionlivre'], ['_controller' => 'App\\Controller\\PropositionlivreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idpropositionlivre', true], ['text', '/propositionlivre']], [], [], []],
    'app_propositionlivre_delete' => [['idpropositionlivre'], ['_controller' => 'App\\Controller\\PropositionlivreController::delete'], [], [['variable', '/', '[^/]++', 'idpropositionlivre', true], ['text', '/propositionlivre']], [], [], []],
    'app_propositionlivre_show_my_proposition' => [['idpropositionlivre'], ['_controller' => 'App\\Controller\\PropositionlivreController::showMyProposition'], [], [['text', '/showMyProposition'], ['variable', '/', '[^/]++', 'idpropositionlivre', true], ['text', '/propositionlivre']], [], [], []],
    'app_reclamation_dashboard' => [[], ['_controller' => 'App\\Controller\\ReclamationController::dashboardRec'], [], [['text', '/reclamation/dashboardRecl']], [], [], []],
    'app_reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], [], []],
    'reclamationFront' => [[], ['_controller' => 'App\\Controller\\ReclamationController::reclamationFront'], [], [['text', '/reclamation/front']], [], [], []],
    'showFrontt' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::showFrontt'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/frontRec']], [], [], []],
    'app_reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'app_reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_reponse_index' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse/']], [], [], []],
    'app_reponse_new' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/new']], [], [], []],
    'app_reponse_show' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'app_reponse_edit' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'app_reponse_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_sujet_index' => [[], ['_controller' => 'App\\Controller\\SujetController::index'], [], [['text', '/sujet/']], [], [], []],
    'app_sujet_new' => [['idtopic'], ['_controller' => 'App\\Controller\\SujetController::new'], [], [['variable', '/', '[^/]++', 'idtopic', true], ['text', '/sujet/new']], [], [], []],
    'app_sujet_show' => [['idsujet'], ['_controller' => 'App\\Controller\\SujetController::show'], [], [['variable', '/', '[^/]++', 'idsujet', true], ['text', '/sujet']], [], [], []],
    'frontSujet' => [['idsujet'], ['_controller' => 'App\\Controller\\SujetController::frontSujet'], [], [['variable', '/', '[^/]++', 'idsujet', true], ['text', '/sujet/frontSujet']], [], [], []],
    'app_sujet_edit' => [['idsujet'], ['_controller' => 'App\\Controller\\SujetController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idsujet', true], ['text', '/sujet']], [], [], []],
    'app_sujet_delete' => [['idsujet'], ['_controller' => 'App\\Controller\\SujetController::delete'], [], [['variable', '/', '[^/]++', 'idsujet', true], ['text', '/sujet']], [], [], []],
    'app_ticket_index' => [[], ['_controller' => 'App\\Controller\\TicketController::index'], [], [['text', '/ticket/']], [], [], []],
    'app_ticket_new' => [[], ['_controller' => 'App\\Controller\\TicketController::new'], [], [['text', '/ticket/new']], [], [], []],
    'app_ticket_show' => [['id'], ['_controller' => 'App\\Controller\\TicketController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_edit' => [['id'], ['_controller' => 'App\\Controller\\TicketController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_delete' => [['id'], ['_controller' => 'App\\Controller\\TicketController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_topic_index' => [[], ['_controller' => 'App\\Controller\\TopicController::index'], [], [['text', '/topic/']], [], [], []],
    'topicFront' => [[], ['_controller' => 'App\\Controller\\TopicController::topicFront'], [], [['text', '/topic/front']], [], [], []],
    'app_topic_new' => [[], ['_controller' => 'App\\Controller\\TopicController::new'], [], [['text', '/topic/new']], [], [], []],
    'showFront' => [['idtopic'], ['_controller' => 'App\\Controller\\TopicController::showTopicAndSubjectsFront'], [], [['variable', '/', '[^/]++', 'idtopic', true], ['text', '/topic/front']], [], [], []],
    'app_topic_show' => [['idtopic'], ['_controller' => 'App\\Controller\\TopicController::show'], [], [['variable', '/', '[^/]++', 'idtopic', true], ['text', '/topic']], [], [], []],
    'app_topic_edit' => [['idtopic'], ['_controller' => 'App\\Controller\\TopicController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idtopic', true], ['text', '/topic']], [], [], []],
    'app_topic_delete' => [['idtopic'], ['_controller' => 'App\\Controller\\TopicController::delete'], [], [['variable', '/', '[^/]++', 'idtopic', true], ['text', '/topic']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'pdfUsers' => [[], ['_controller' => 'App\\Controller\\UserController::pdfd'], [], [['text', '/user/export/pdf']], [], [], []],
    'recSearch' => [[], ['_controller' => 'App\\Controller\\UserController::search'], [], [['text', '/user/front/recSearch']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/delete']], [], [], []],
    'app_user_signin' => [[], ['_controller' => 'App\\Controller\\UserController::signin'], [], [['text', '/user/front/signin']], [], [], []],
    'app_user_signup' => [[], ['_controller' => 'App\\Controller\\UserController::signup'], [], [['text', '/user/front/signup']], [], [], []],
    'app_user_profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/user/back/profile']], [], [], []],
    'app_user_deleteAccount' => [[], ['_controller' => 'App\\Controller\\UserController::deleteAccount'], [], [['text', '/user/back/deleteAccount']], [], [], []],
    'app_user_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/user/log/out']], [], [], []],
    'app_user_profilefront' => [[], ['_controller' => 'App\\Controller\\UserController::profileFront'], [], [['text', '/user/front/profile']], [], [], []],
    'app_user_fgtpwd' => [[], ['_controller' => 'App\\Controller\\UserController::fgtpwd'], [], [['text', '/user/front/fgtpwd']], [], [], []],
    'app_user_newpwd' => [['id'], ['_controller' => 'App\\Controller\\UserController::newpassword'], [], [['text', '/newpwd'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/front']], [], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];

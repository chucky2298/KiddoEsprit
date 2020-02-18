<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // events_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EventsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'events_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_events_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'events_homepage'));
            }

            return $ret;
        }
        not_events_homepage:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajouter')) {
                // ajouter_event
                if ('/ajouterEvent' === $pathinfo) {
                    return array (  '_controller' => 'EventsBundle\\Controller\\EventsController::ajoutEventAction',  '_route' => 'ajouter_event',);
                }

                // ajouter_category
                if ('/ajouterCategory' === $pathinfo) {
                    return array (  '_controller' => 'EventsBundle\\Controller\\CategoryController::ajouterCategoryAction',  '_route' => 'ajouter_category',);
                }

                // ajouter_participation
                if ('/ajouterParticipation' === $pathinfo) {
                    return array (  '_controller' => 'EventsBundle:Pass:ajouterParticipations',  '_route' => 'ajouter_participation',);
                }

                // ajouter_commentaire
                if ('/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\commentaireController::newAction',  '_route' => 'ajouter_commentaire',);
                }

            }

            elseif (0 === strpos($pathinfo, '/afficher')) {
                // afficher_event
                if ('/afficherEvent' === $pathinfo) {
                    return array (  '_controller' => 'EventsBundle\\Controller\\EventsController::afficherEventAction',  '_route' => 'afficher_event',);
                }

                // afficher_category
                if ('/afficherCategory' === $pathinfo) {
                    return array (  '_controller' => 'EventsBundle\\Controller\\CategoryController::afficherCategoryAction',  '_route' => 'afficher_category',);
                }

                // afficher_participation
                if ('/afficherParticipation' === $pathinfo) {
                    return array (  '_controller' => 'EventsBundle:Pass:afficherParticipations',  '_route' => 'afficher_participation',);
                }

                // afficher_commentaire
                if ('/afficher' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\commentaireController::indexAction',  '_route' => 'afficher_commentaire',);
                }

                // afficherback_commentaire
                if ('/afficherback' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\commentaireController::index1Action',  '_route' => 'afficherback_commentaire',);
                }

            }

            // reclamation_ajout
            if ('/addReclamation' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::ajoutAction',  '_route' => 'reclamation_ajout',);
            }

        }

        elseif (0 === strpos($pathinfo, '/supprimer')) {
            // supprimer_event
            if (0 === strpos($pathinfo, '/supprimerEvent') && preg_match('#^/supprimerEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_event']), array (  '_controller' => 'EventsBundle\\Controller\\EventsController::supprimerEventAction',));
            }

            // supprimer_category
            if (0 === strpos($pathinfo, '/supprimerCategory') && preg_match('#^/supprimerCategory/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_category']), array (  '_controller' => 'EventsBundle\\Controller\\CategoryController::supprimerCategoryAction',));
            }

            // supprimer_participation
            if (0 === strpos($pathinfo, '/supprimerParticipation') && preg_match('#^/supprimerParticipation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_participation']), array (  '_controller' => 'EventsBundle:Pass:supprimerParticipations',));
            }

        }

        // reclamation_affiche
        if ('/showReclamation' === $pathinfo) {
            return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::afficherAction',  '_route' => 'reclamation_affiche',);
        }

        // modifier_event
        if (0 === strpos($pathinfo, '/modifierEvent') && preg_match('#^/modifierEvent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_event']), array (  '_controller' => 'EventsBundle\\Controller\\EventsController::modifierEventAction',));
        }

        // event_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EventBundle\\Controller\\DefaultController::indexAction',  '_route' => 'event_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_event_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'event_default_index'));
            }

            return $ret;
        }
        not_event_default_index:

        // homepage
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // testpage
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testAction',  '_route' => 'testpage',);
        }

        // reclamation_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reclamation_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_reclamation_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reclamation_homepage'));
            }

            return $ret;
        }
        not_reclamation_homepage:

        // reclamation_delete
        if (0 === strpos($pathinfo, '/deleteReclamation') && preg_match('#^/deleteReclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_delete']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::deleteAction',));
        }

        // reclamation_update
        if (0 === strpos($pathinfo, '/updateReclamation') && preg_match('#^/updateReclamation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_update']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::updateAction',));
        }

        // forum_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_forum_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'forum_homepage'));
            }

            return $ret;
        }
        not_forum_homepage:

        // commentaire_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'commentaire_delete']), array (  '_controller' => 'ForumBundle\\Controller\\commentaireController::deleteAction',));
        }

        // afficher_reponse
        if ('/afficherpnse' === $pathinfo) {
            return array (  '_controller' => 'ForumBundle\\Controller\\reponseController::index1Action',  '_route' => 'afficher_reponse',);
        }

        // reponse_delete
        if (preg_match('#^/(?P<ref>[^/]++)/delete$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'reponse_delete']), array (  '_controller' => 'ForumBundle\\Controller\\reponseController::deleteAction',));
        }

        // actualite_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ActualiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'actualite_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_actualite_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'actualite_homepage'));
            }

            return $ret;
        }
        not_actualite_homepage:

        if (0 === strpos($pathinfo, '/ajout')) {
            // actualite_ajoutActualite
            if ('/ajoutActualite' === $pathinfo) {
                return array (  '_controller' => 'ActualiteBundle\\Controller\\mainController::ajoutActualiteAction',  '_route' => 'actualite_ajoutActualite',);
            }

            // actualite_ajoutCommentaire
            if ('/ajoutCommentaire' === $pathinfo) {
                return array (  '_controller' => 'ActualiteBundle\\Controller\\mainController::ajoutCommentaireAction',  '_route' => 'actualite_ajoutCommentaire',);
            }

            // ajoutEnfant
            if ('/ajoutEnfant' === $pathinfo) {
                return array (  '_controller' => 'GererEnfantBundle\\Controller\\EnfantController::ajoutEnfantAction',  '_route' => 'ajoutEnfant',);
            }

            // ajoutNote
            if ('/ajoutNote' === $pathinfo) {
                return array (  '_controller' => 'GererEnfantBundle\\Controller\\NoteController::ajoutNoteAction',  '_route' => 'ajoutNote',);
            }

        }

        elseif (0 === strpos($pathinfo, '/affiche')) {
            // actualite_afficheActualite
            if ('/afficheActualite' === $pathinfo) {
                return array (  '_controller' => 'ActualiteBundle\\Controller\\mainController::afficheActualiteAction',  '_route' => 'actualite_afficheActualite',);
            }

            // actualite_afficheCommentaire
            if ('/afficheCommentaire' === $pathinfo) {
                return array (  '_controller' => 'ActualiteBundle\\Controller\\mainController::afficheCommentaireAction',  '_route' => 'actualite_afficheCommentaire',);
            }

            // afficheEnfant
            if ('/afficheEnfant' === $pathinfo) {
                return array (  '_controller' => 'GererEnfantBundle\\Controller\\EnfantController::afficheEnfantAction',  '_route' => 'afficheEnfant',);
            }

            // afficheNote
            if ('/afficheNote' === $pathinfo) {
                return array (  '_controller' => 'GererEnfantBundle\\Controller\\NoteController::afficheNoteAction',  '_route' => 'afficheNote',);
            }

        }

        elseif (0 === strpos($pathinfo, '/update')) {
            // actualite_updateActualite
            if (0 === strpos($pathinfo, '/updateActualite') && preg_match('#^/updateActualite/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'actualite_updateActualite']), array (  '_controller' => 'ActualiteBundle\\Controller\\mainController::updateActualiteAction',));
            }

            // updateEnfant
            if (0 === strpos($pathinfo, '/updateEnfant') && preg_match('#^/updateEnfant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateEnfant']), array (  '_controller' => 'GererEnfantBundle\\Controller\\EnfantController::updateEnfantAction',));
            }

            // updateNote
            if (0 === strpos($pathinfo, '/updateNote') && preg_match('#^/updateNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateNote']), array (  '_controller' => 'GererEnfantBundle\\Controller\\NoteController::updateNoteAction',));
            }

        }

        // actualite_supprimeActualite
        if (0 === strpos($pathinfo, '/supprimeActualite') && preg_match('#^/supprimeActualite/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'actualite_supprimeActualite']), array (  '_controller' => 'ActualiteBundle\\Controller\\mainController::supprimeActualiteAction',));
        }

        // actualite_supprimeCommentaire
        if (0 === strpos($pathinfo, '/supprimeCommentaire') && preg_match('#^/supprimeCommentaire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'actualite_supprimeCommentaire']), array (  '_controller' => 'ActualiteBundle\\Controller\\mainController::supprimeCommentaireAction',));
        }

        // gerer_enfant_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GererEnfantBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gerer_enfant_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gerer_enfant_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gerer_enfant_homepage'));
            }

            return $ret;
        }
        not_gerer_enfant_homepage:

        // deleteEnfant
        if (0 === strpos($pathinfo, '/deleteEnfant') && preg_match('#^/deleteEnfant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteEnfant']), array (  '_controller' => 'GererEnfantBundle\\Controller\\EnfantController::deleteEnfantAction',));
        }

        // deleteNote
        if (0 === strpos($pathinfo, '/deleteNote') && preg_match('#^/deleteNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteNote']), array (  '_controller' => 'GererEnfantBundle\\Controller\\NoteController::deleteNoteAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

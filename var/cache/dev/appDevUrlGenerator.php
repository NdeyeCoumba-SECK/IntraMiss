<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_gestiondepenses_default_chart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\GestionDepensesBundle\\Controller\\DefaultController::chartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/chart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ressource_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\DefaultController::newProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ressource/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::ajoutfraisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/AjoutFrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::listefraisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/ListeFrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_modification' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::modificationfraisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/ModificationFrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suppression' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DepenseController::suppressionfraisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GM/SuppressionFrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_new_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::newProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_list_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::listeProjetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/listeProjet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_project_status' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::projectStatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/projectStatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_received_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::receivedProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/receivedProject',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_positioned_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::positionedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/positioned',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_ressource_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::ressourceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/ressource',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_detail_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::detailProjetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/detailProjet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_ressource_affectation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\RessourceController::affectationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/affectationRessource',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_update_projects' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::updateProjectsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/updateProjects',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_update_excel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::excelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/excel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_update_date' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::dateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/excel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_assist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::assistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/assist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_infoColab' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::infoCollaborateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/infoColab',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_candidature' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::candidatureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/candidature',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_on_mission' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::onMissionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/onMission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_on_mission_detail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::dtailOnMissionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/dtailOnMission',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_mydocument' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::mydocumentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/mydocument',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_savemydocument' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::savemydocumentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/savemydocument',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_frais_colabs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::fraisColabsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/fraisColabs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_frais_colab' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::fraisParColabAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/fraisColab',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_frais_valider' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::validerFraisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/validerFrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::exportFraisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_suivi_export_tout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\SuiviController::exportToutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/exportTout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_dsms_perdiem' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::perdiemAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/perdiem',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_dsms_perdiem_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::exportPerdiemAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/exportPerdiem',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gm_projet_dsms_perdiem_export_tout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GM\\ProjetBundle\\Controller\\DsmsController::exportToutPerdiemAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GM/exportToutPerdiem',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_collaborateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::collaborateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/collaborateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_arh' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::assistantRHAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/arh',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_drh' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::directeurRHAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/drh',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_dg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::dgAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_atos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::projetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/atos-externe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::usersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateurs_enable_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\DefaultController::enableUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enable',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateursBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
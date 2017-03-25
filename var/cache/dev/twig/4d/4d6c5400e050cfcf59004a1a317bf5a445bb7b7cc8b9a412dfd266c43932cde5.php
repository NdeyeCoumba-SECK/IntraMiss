<?php

/* ::baseSiminta.html.twig */
class __TwigTemplate_df0aa09ff83e8c3c034afa56ea11b60c6bd9879b42b1bd2d2b0f31a4c7bc7d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navTop' => array($this, 'block_navTop'),
            'navSide' => array($this, 'block_navSide'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ae171083c110df08d648719760375eeff3f5360590434b5522a1796c1e84775 = $this->env->getExtension("native_profiler");
        $__internal_1ae171083c110df08d648719760375eeff3f5360590434b5522a1796c1e84775->enter($__internal_1ae171083c110df08d648719760375eeff3f5360590434b5522a1796c1e84775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseSiminta.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Core CSS - Include with every page -->
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "

    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 482
        echo "


        <!-- Core Scripts - Include with every page -->
        ";
        // line 486
        $this->displayBlock('javascripts', $context, $blocks);
        // line 497
        echo "    </body>

</html>
";
        
        $__internal_1ae171083c110df08d648719760375eeff3f5360590434b5522a1796c1e84775->leave($__internal_1ae171083c110df08d648719760375eeff3f5360590434b5522a1796c1e84775_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f55f56918b9d5646cea3e9bbe85a8b6cd04555cc77fc84c75056757240d8cb8 = $this->env->getExtension("native_profiler");
        $__internal_0f55f56918b9d5646cea3e9bbe85a8b6cd04555cc77fc84c75056757240d8cb8->enter($__internal_0f55f56918b9d5646cea3e9bbe85a8b6cd04555cc77fc84c75056757240d8cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to manage yours online missions!";
        
        $__internal_0f55f56918b9d5646cea3e9bbe85a8b6cd04555cc77fc84c75056757240d8cb8->leave($__internal_0f55f56918b9d5646cea3e9bbe85a8b6cd04555cc77fc84c75056757240d8cb8_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06b184ccb4d1ba820e1d0865dc39b0efc06f995c366aeb790cf5130adc5b02a0 = $this->env->getExtension("native_profiler");
        $__internal_06b184ccb4d1ba820e1d0865dc39b0efc06f995c366aeb790cf5130adc5b02a0->enter($__internal_06b184ccb4d1ba820e1d0865dc39b0efc06f995c366aeb790cf5130adc5b02a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  ";
        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  <!-- nav bleu logo ... -->
            <link href=\"/GestionLR/web/css/styleEspace.css\" type=\"text/css\" rel=\"stylesheet\" />
            <!-- Page-Level CSS -->
            ";
        // line 17
        echo "        ";
        
        $__internal_06b184ccb4d1ba820e1d0865dc39b0efc06f995c366aeb790cf5130adc5b02a0->leave($__internal_06b184ccb4d1ba820e1d0865dc39b0efc06f995c366aeb790cf5130adc5b02a0_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_940063ede0ed2c1e5bbbe7b5313e031dced554b58a1829d4eaf20be3905588de = $this->env->getExtension("native_profiler");
        $__internal_940063ede0ed2c1e5bbbe7b5313e031dced554b58a1829d4eaf20be3905588de->enter($__internal_940063ede0ed2c1e5bbbe7b5313e031dced554b58a1829d4eaf20be3905588de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "            <!--  wrapper --> 
            <div id=\"wrapper\">
                <!-- navbar top -->
                ";
        // line 26
        $this->displayBlock('navTop', $context, $blocks);
        // line 260
        echo "                <!-- end navbar top -->
                ";
        // line 262
        echo "                ";
        // line 263
        echo "                ";
        // line 264
        echo "                ";
        // line 265
        echo "




                ";
        // line 271
        echo "                ";
        // line 272
        echo "                ";
        // line 273
        echo "                ";
        // line 274
        echo "
                <!-- navbar side -->
                ";
        // line 276
        $this->displayBlock('navSide', $context, $blocks);
        // line 378
        echo "                ";
        // line 379
        echo "                ";
        // line 380
        echo "                ";
        // line 381
        echo "                ";
        // line 382
        echo "
                <!-- end navbar side -->


                ";
        // line 387
        echo "                ";
        // line 388
        echo "                ";
        // line 389
        echo "                ";
        echo "  
                <!--  page-wrapper -->
                ";
        // line 392
        echo "                bb
                ";
        // line 393
        $this->displayBlock('menu', $context, $blocks);
        // line 415
        echo "
                    ";
        // line 416
        $this->displayBlock('contenu', $context, $blocks);
        // line 477
        echo "                <!-- end page-wrapper -->

            </div>
            <!-- end wrapper -->
        ";
        
        $__internal_940063ede0ed2c1e5bbbe7b5313e031dced554b58a1829d4eaf20be3905588de->leave($__internal_940063ede0ed2c1e5bbbe7b5313e031dced554b58a1829d4eaf20be3905588de_prof);

    }

    // line 26
    public function block_navTop($context, array $blocks = array())
    {
        $__internal_86d1df1e24b9e8303b5a2622093ab972802abed40eba3aed4ff078812854d7bd = $this->env->getExtension("native_profiler");
        $__internal_86d1df1e24b9e8303b5a2622093ab972802abed40eba3aed4ff078812854d7bd->enter($__internal_86d1df1e24b9e8303b5a2622093ab972802abed40eba3aed4ff078812854d7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navTop"));

        // line 27
        echo "                    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" id=\"navbar\">
                        <!-- navbar-header -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"index.html\">
                                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logoAtosBlanc.png"), "html", null, true);
        echo "\" alt=\"Leaded Resources\" />
                                ";
        // line 39
        echo "                            </a>
                        </div>
                        <!-- end navbar-header -->
                        <!-- navbar-top-links -->
                        <ul class=\"nav navbar-top-links navbar-right\">
                            <!-- main dropdown -->
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <span class=\"top-label label label-danger\">3</span><i class=\"fa fa-envelope fa-3x\"></i>
                                </a>
                                <!-- dropdown-messages -->
                                <ul class=\"dropdown-menu dropdown-messages\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong><span class=\" label label-danger\">Andrew Smith</span></strong>
                                                <span class=\"pull-right text-muted\">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong><span class=\" label label-info\">Jonney Depp</span></strong>
                                                <span class=\"pull-right text-muted\">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong><span class=\" label label-success\">Jonney Depp</span></strong>
                                                <span class=\"pull-right text-muted\">
                                                    <em>Yesterday</em>
                                                </span>
                                            </div>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>Read All Messages</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- end dropdown-messages -->
                            </li>

                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <span class=\"top-label label label-success\">4</span>  <i class=\"fa fa-tasks fa-3x\"></i>
                                </a>
                                <!-- dropdown tasks -->
                                <ul class=\"dropdown-menu dropdown-tasks\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 1</strong>
                                                    <span class=\"pull-right text-muted\">40% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                                        <span class=\"sr-only\">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 2</strong>
                                                    <span class=\"pull-right text-muted\">20% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 3</strong>
                                                    <span class=\"pull-right text-muted\">60% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 4</strong>
                                                    <span class=\"pull-right text-muted\">80% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                        <span class=\"sr-only\">80% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>See All Tasks</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- end dropdown-tasks -->
                            </li>

                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <span class=\"top-label label label-warning\">5</span>  <i class=\"fa fa-bell fa-3x\"></i>
                                </a>
                                <!-- dropdown alerts-->
                                <ul class=\"dropdown-menu dropdown-alerts\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-comment fa-fw\"></i>New Comment
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-twitter fa-fw\"></i>3 New Followers
                                                <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-envelope fa-fw\"></i>Message Sent
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-tasks fa-fw\"></i>New Task
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-upload fa-fw\"></i>Server Rebooted
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- end dropdown-alerts -->
                            </li>

                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"fa fa-user fa-3x\"></i>
                                </a>
                                <!-- dropdown user-->
                                <ul class=\"dropdown-menu dropdown-user\">
                                    <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i>User Profile</a>
                                    </li>
                                    <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i>Settings</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i>Logout</a>
                                    </li>
                                </ul>
                                <!-- end dropdown-user -->
                            </li>
                            <!-- end main dropdown -->
                        </ul>
                        <!-- end navbar-top-links -->

                    </nav>
                ";
        
        $__internal_86d1df1e24b9e8303b5a2622093ab972802abed40eba3aed4ff078812854d7bd->leave($__internal_86d1df1e24b9e8303b5a2622093ab972802abed40eba3aed4ff078812854d7bd_prof);

    }

    // line 276
    public function block_navSide($context, array $blocks = array())
    {
        $__internal_e6e1efcab93b11ea0f8de2bb5fa4044bb0cea0738807a95cc70b9c702ac3abee = $this->env->getExtension("native_profiler");
        $__internal_e6e1efcab93b11ea0f8de2bb5fa4044bb0cea0738807a95cc70b9c702ac3abee->enter($__internal_e6e1efcab93b11ea0f8de2bb5fa4044bb0cea0738807a95cc70b9c702ac3abee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navSide"));

        // line 277
        echo "                    <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
                        <!-- sidebar-collapse -->
                        <div class=\"sidebar-collapse\">
                            <!-- side-menu -->
                            <ul class=\"nav\" id=\"side-menu\">
                                <li>
                                    <!-- user image section-->
                                    <div class=\"user-section\">
                                        <div class=\"user-section-inner\">
                                            <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/mee.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"user-info\">
                                            <div>Ndèye <strong>Seck</strong></div>
                                            <div class=\"user-text-online\">
                                                <span class=\"user-circle-online btn btn-success btn-circle \"></span>&nbsp;Online
                                            </div>
                                        </div>
                                    </div>
                                    <!--end user image section-->
                                </li>
                                <li class=\"sidebar-search\">
                                    <!-- search section-->
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\">
                                                <i class=\"fa fa-search\"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <!--end search section-->
                                </li>
                                <li class=\"selected\">
                                    <a href=\"index.html\"><i class=\"fa fa-home fa-fw\"></i>Accueil</a>
                                </li>
                                <li>
                                    <a href=\"timeline.html\"><i class=\"fa fa-tasks fa-fw\"></i>Projets</a>
                                    ";
        // line 315
        echo "                                    <ul class=\"nav nav-second-level\"fa-edit>
                                        <li>
                                            <a href=\"panels-wells.html\">En cours</a>
                                        </li>
                                        <";
        // line 321
        echo ">

                                    </ul>
                                </li>
                                <li>
                                    <a href=\"tables.html\"><i class=\"fa fa-users fa-fw\"></i>Ressources</a>
                                    ";
        // line 328
        echo "                                </li>
                                <li>
                                    <a href=\"forms.html\"><i class=\"fa fa-folder-open-o fa-fw\"></i>Dossier Visa</a>
                                    ";
        // line 332
        echo "                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i>Dépenses<span class=\"fa arrow\"></span></a> 
                                        ";
        // line 336
        echo "
                                    <ul class=\"nav nav-second-level\"fa-edit>
                                        <li>
                                            <a href=\"panels-wells.html\">Per Diem</a>
                                        </li>
                                        <li>
                                            <a href=\"buttons.html\">Etat des frais</a>
                                        </li>

                                    </ul>
                                    <!-- second-level-items -->
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Reporting<span class=\"fa arrow\"></span></a>
                                        ";
        // line 358
        echo "                                    <!-- second-level-items -->
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-comments fa-fw\"></i>Chat<span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-second-level\">
                                        <li>
                                            <a href=\"blank.html\">Blank Page</a>
                                        </li>
                                        <li>
                                            <a href=\"login.html\">Login Page</a>
                                        </li>
                                    </ul>
                                    <!-- second-level-items -->
                                </li>
                            </ul>
                            <!-- end side-menu -->
                        </div>
                        <!-- end sidebar-collapse -->
                    </nav>
                ";
        
        $__internal_e6e1efcab93b11ea0f8de2bb5fa4044bb0cea0738807a95cc70b9c702ac3abee->leave($__internal_e6e1efcab93b11ea0f8de2bb5fa4044bb0cea0738807a95cc70b9c702ac3abee_prof);

    }

    // line 393
    public function block_menu($context, array $blocks = array())
    {
        $__internal_978cd55a9f56437eb61ae71a083e2f3dfb74dc322eea3868e34c89a04bbdacf6 = $this->env->getExtension("native_profiler");
        $__internal_978cd55a9f56437eb61ae71a083e2f3dfb74dc322eea3868e34c89a04bbdacf6->enter($__internal_978cd55a9f56437eb61ae71a083e2f3dfb74dc322eea3868e34c89a04bbdacf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 394
        echo "                    <div id=\"page-wrapper\">

                        <div class=\"row\">
                            <!-- Page Header -->
                            <div class=\"col-lg-12\">
                                <div class=\"row\">
                                    <!-- Menu Assistant RH -->
                                    <div class=\"col-lg-12\">
                                        <div class=\"alert label-danger\" >
                                            ";
        // line 403
        echo twig_include($this->env, $context, "UtilisateursBundle:Default:menuARH.html.twig");
        echo "
                                        </div>
                                    </div>
                                    <!--end  Menu Assistant RH -->
                                </div>
                                <h1 class=\"page-header\">Gestion des missions \"Landed Ressources\"</h1>
                            </div>
                            <!--End Page Header -->
                        </div>


                    ";
        
        $__internal_978cd55a9f56437eb61ae71a083e2f3dfb74dc322eea3868e34c89a04bbdacf6->leave($__internal_978cd55a9f56437eb61ae71a083e2f3dfb74dc322eea3868e34c89a04bbdacf6_prof);

    }

    // line 416
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_18ae6daa65df9bb64e1d200d05278fe3d9498fa30e977da27d965c87eae5a756 = $this->env->getExtension("native_profiler");
        $__internal_18ae6daa65df9bb64e1d200d05278fe3d9498fa30e977da27d965c87eae5a756->enter($__internal_18ae6daa65df9bb64e1d200d05278fe3d9498fa30e977da27d965c87eae5a756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 417
        echo "                        <nav class=\"row\">
                            <div class=\"col-sm-10 col-sm-offset-1\" style=\"border: 0px solid\">
                                <table border=\"0px\" width=\"97%\" class=\"menuARH\">
                                    <tr>
                                        <td >
                                            <a href=\"#\" id=\"projectStatus\">
                                                <span class=\"icons\" style=\"background-color: #718C00\">
                                                    <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                                                </span> 
                                                <span class=\"lien lien1\"> Projects Status </span> 
                                            </a> 
                                        </td>
                                        <td> 
                                            <a href=\"#\" id=\"assistCollaboratos\">
                                                <span class=\"icons\" style=\"background-color: #5eb5e0\">
                                                    <span class=\"glyphicon glyphicon-hand-down\" aria-hidden=\"true\"></span>
                                                </span> 
                                                <span class=\"lien lien2\"> Assist Collaborators</span> 
                                            </a> 
                                        </td>
                                        <td> 
                                            <a href=\"#\" id=\"collaborateursMission\">
                                                <span class=\"icons\" style=\"background-color: #718C00\">
                                                    <span class=\"glyphicon glyphicon-plane\" aria-hidden=\"true\"></span>
                                                </span> 
                                                <span class=\"lien lien3\"> Collaborators on mission </span> 
                                            </a> 
                                        </td>

                                        <td> 
                                            <a href=\"#\" id=\"frais\">
                                                <span class=\"icons\" style=\"background-color: #5eb5e0\">
                                                    <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
                                                </span> 
                                                <span class=\"lien lien4\"> Collaborators fees </span> 
                                            </a> 
                                        </td>
                                        <td> 
                                            <a href=\"#\" id=\"perdiem\">
                                                <span class=\"icons\" style=\"background-color: #718C00\">
                                                    <span class=\"glyphicon glyphicon-credit-card\" aria-hidden=\"true\"></span>
                                                </span> 
                                                <span class=\"lien lien5\"> Perdieme </span> 
                                            </a> 
                                        </td>
                                        <td> 
                                            <a href=\"#\" id=\"profile\">
                                                <span class=\"icons\" style=\"background-color: #5eb5e0\">
                                                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                                                </span> 
                                                <span class=\"lien lien6\"> My Profile </span> 
                                            </a> 
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </nav>

                    </div>
                ";
        
        $__internal_18ae6daa65df9bb64e1d200d05278fe3d9498fa30e977da27d965c87eae5a756->leave($__internal_18ae6daa65df9bb64e1d200d05278fe3d9498fa30e977da27d965c87eae5a756_prof);

    }

    // line 486
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_735ace241c873b7847e17a51f3e1bce8e211ed307289c5518bcf79c92976cbbe = $this->env->getExtension("native_profiler");
        $__internal_735ace241c873b7847e17a51f3e1bce8e211ed307289c5518bcf79c92976cbbe->enter($__internal_735ace241c873b7847e17a51f3e1bce8e211ed307289c5518bcf79c92976cbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 487
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/pace/pace.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/scripts/siminta.js"), "html", null, true);
        echo "\"></script>
            <!-- Page-Level Plugin Scripts-->
            <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/morris/morris.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/scripts/dashboard-demo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_735ace241c873b7847e17a51f3e1bce8e211ed307289c5518bcf79c92976cbbe->leave($__internal_735ace241c873b7847e17a51f3e1bce8e211ed307289c5518bcf79c92976cbbe_prof);

    }

    public function getTemplateName()
    {
        return "::baseSiminta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  707 => 495,  703 => 494,  699 => 493,  694 => 491,  690 => 490,  686 => 489,  682 => 488,  677 => 487,  671 => 486,  605 => 417,  599 => 416,  580 => 403,  569 => 394,  563 => 393,  537 => 358,  521 => 336,  516 => 332,  511 => 328,  503 => 321,  497 => 315,  466 => 286,  455 => 277,  449 => 276,  222 => 39,  218 => 37,  206 => 27,  200 => 26,  189 => 477,  187 => 416,  184 => 415,  182 => 393,  179 => 392,  174 => 389,  172 => 388,  170 => 387,  164 => 382,  162 => 381,  160 => 380,  158 => 379,  156 => 378,  154 => 276,  150 => 274,  148 => 273,  146 => 272,  144 => 271,  137 => 265,  135 => 264,  133 => 263,  131 => 262,  128 => 260,  126 => 26,  121 => 23,  115 => 22,  108 => 17,  101 => 12,  98 => 11,  94 => 10,  90 => 9,  82 => 8,  70 => 6,  60 => 497,  58 => 486,  52 => 482,  50 => 22,  44 => 18,  42 => 8,  37 => 6,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}Welcome to manage yours online missions!{% endblock %}</title>*/
/*         <!-- Core CSS - Include with every page -->*/
/*         {% block stylesheets %} */
/*             <link href="{{ asset('assets/plugins/bootstrap/bootstrap.css')}}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('assets/font-awesome/css/font-awesome.css')}}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />  {#   nav top et side    #}*/
/*             <link href="{{ asset('assets/css/main-style.css')}}" rel="stylesheet" type="text/css" />  <!-- nav bleu logo ... -->*/
/*             <link href="/GestionLR/web/css/styleEspace.css" type="text/css" rel="stylesheet" />*/
/*             <!-- Page-Level CSS -->*/
/*             {#        <link href="{{ asset('assets/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet" type="text/css" />*/
/*                       <link href="{{ asset('assets/plugins/pace/pace-theme-big-counter.css')}}" type="text/css" rel="stylesheet" /> #}*/
/*         {% endblock%}*/
/* */
/* */
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             <!--  wrapper --> */
/*             <div id="wrapper">*/
/*                 <!-- navbar top -->*/
/*                 {% block navTop %}*/
/*                     <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">*/
/*                         <!-- navbar-header -->*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <a class="navbar-brand" href="index.html">*/
/*                                 <img src="{{asset('assets/img/logoAtosBlanc.png')}}" alt="Leaded Resources" />*/
/*                                 {#  style="background:url(/images/slideshow/1.jpg) no-repeat 0px 0px;"     tous les navigateurs             #}*/
/*                             </a>*/
/*                         </div>*/
/*                         <!-- end navbar-header -->*/
/*                         <!-- navbar-top-links -->*/
/*                         <ul class="nav navbar-top-links navbar-right">*/
/*                             <!-- main dropdown -->*/
/*                             <li class="dropdown">*/
/*                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>*/
/*                                 </a>*/
/*                                 <!-- dropdown-messages -->*/
/*                                 <ul class="dropdown-menu dropdown-messages">*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <strong><span class=" label label-danger">Andrew Smith</span></strong>*/
/*                                                 <span class="pull-right text-muted">*/
/*                                                     <em>Yesterday</em>*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <strong><span class=" label label-info">Jonney Depp</span></strong>*/
/*                                                 <span class="pull-right text-muted">*/
/*                                                     <em>Yesterday</em>*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <strong><span class=" label label-success">Jonney Depp</span></strong>*/
/*                                                 <span class="pull-right text-muted">*/
/*                                                     <em>Yesterday</em>*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                             <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a class="text-center" href="#">*/
/*                                             <strong>Read All Messages</strong>*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <!-- end dropdown-messages -->*/
/*                             </li>*/
/* */
/*                             <li class="dropdown">*/
/*                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>*/
/*                                 </a>*/
/*                                 <!-- dropdown tasks -->*/
/*                                 <ul class="dropdown-menu dropdown-tasks">*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <p>*/
/*                                                     <strong>Task 1</strong>*/
/*                                                     <span class="pull-right text-muted">40% Complete</span>*/
/*                                                 </p>*/
/*                                                 <div class="progress progress-striped active">*/
/*                                                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/*                                                         <span class="sr-only">40% Complete (success)</span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <p>*/
/*                                                     <strong>Task 2</strong>*/
/*                                                     <span class="pull-right text-muted">20% Complete</span>*/
/*                                                 </p>*/
/*                                                 <div class="progress progress-striped active">*/
/*                                                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">*/
/*                                                         <span class="sr-only">20% Complete</span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <p>*/
/*                                                     <strong>Task 3</strong>*/
/*                                                     <span class="pull-right text-muted">60% Complete</span>*/
/*                                                 </p>*/
/*                                                 <div class="progress progress-striped active">*/
/*                                                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/*                                                         <span class="sr-only">60% Complete (warning)</span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <p>*/
/*                                                     <strong>Task 4</strong>*/
/*                                                     <span class="pull-right text-muted">80% Complete</span>*/
/*                                                 </p>*/
/*                                                 <div class="progress progress-striped active">*/
/*                                                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/*                                                         <span class="sr-only">80% Complete (danger)</span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a class="text-center" href="#">*/
/*                                             <strong>See All Tasks</strong>*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <!-- end dropdown-tasks -->*/
/*                             </li>*/
/* */
/*                             <li class="dropdown">*/
/*                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>*/
/*                                 </a>*/
/*                                 <!-- dropdown alerts-->*/
/*                                 <ul class="dropdown-menu dropdown-alerts">*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <i class="fa fa-comment fa-fw"></i>New Comment*/
/*                                                 <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <i class="fa fa-twitter fa-fw"></i>3 New Followers*/
/*                                                 <span class="pull-right text-muted small">12 minutes ago</span>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <i class="fa fa-envelope fa-fw"></i>Message Sent*/
/*                                                 <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <i class="fa fa-tasks fa-fw"></i>New Task*/
/*                                                 <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <div>*/
/*                                                 <i class="fa fa-upload fa-fw"></i>Server Rebooted*/
/*                                                 <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a class="text-center" href="#">*/
/*                                             <strong>See All Alerts</strong>*/
/*                                             <i class="fa fa-angle-right"></i>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <!-- end dropdown-alerts -->*/
/*                             </li>*/
/* */
/*                             <li class="dropdown">*/
/*                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                     <i class="fa fa-user fa-3x"></i>*/
/*                                 </a>*/
/*                                 <!-- dropdown user-->*/
/*                                 <ul class="dropdown-menu dropdown-user">*/
/*                                     <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>*/
/*                                     </li>*/
/*                                     <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <!-- end dropdown-user -->*/
/*                             </li>*/
/*                             <!-- end main dropdown -->*/
/*                         </ul>*/
/*                         <!-- end navbar-top-links -->*/
/* */
/*                     </nav>*/
/*                 {% endblock %}*/
/*                 <!-- end navbar top -->*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/* */
/* */
/* */
/* */
/* */
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/* */
/*                 <!-- navbar side -->*/
/*                 {% block navSide %}*/
/*                     <nav class="navbar-default navbar-static-side" role="navigation">*/
/*                         <!-- sidebar-collapse -->*/
/*                         <div class="sidebar-collapse">*/
/*                             <!-- side-menu -->*/
/*                             <ul class="nav" id="side-menu">*/
/*                                 <li>*/
/*                                     <!-- user image section-->*/
/*                                     <div class="user-section">*/
/*                                         <div class="user-section-inner">*/
/*                                             <img src="{{asset('assets/img/mee.jpg')}}" alt="">*/
/*                                         </div>*/
/*                                         <div class="user-info">*/
/*                                             <div>Ndèye <strong>Seck</strong></div>*/
/*                                             <div class="user-text-online">*/
/*                                                 <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!--end user image section-->*/
/*                                 </li>*/
/*                                 <li class="sidebar-search">*/
/*                                     <!-- search section-->*/
/*                                     <div class="input-group custom-search-form">*/
/*                                         <input type="text" class="form-control" placeholder="Search...">*/
/*                                         <span class="input-group-btn">*/
/*                                             <button class="btn btn-default" type="button">*/
/*                                                 <i class="fa fa-search"></i>*/
/*                                             </button>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                     <!--end search section-->*/
/*                                 </li>*/
/*                                 <li class="selected">*/
/*                                     <a href="index.html"><i class="fa fa-home fa-fw"></i>Accueil</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="timeline.html"><i class="fa fa-tasks fa-fw"></i>Projets</a>*/
/*                                     {# fa-flask Old           fa-table   / fa-tasks       #}*/
/*                                     <ul class="nav nav-second-level"fa-edit>*/
/*                                         <li>*/
/*                                             <a href="panels-wells.html">En cours</a>*/
/*                                         </li>*/
/*                                         <{#li>*/
/*                                             <a href="buttons.html">Archivage</a>*/
/*                                         </li#}>*/
/* */
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="tables.html"><i class="fa fa-users fa-fw"></i>Ressources</a>*/
/*                                     {#  fa-table Old                    #}*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="forms.html"><i class="fa fa-folder-open-o fa-fw"></i>Dossier Visa</a>*/
/*                                     {# fa-edit Old           fa-folder-open-o            #}*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="fa fa-edit fa-fw"></i>Dépenses<span class="fa arrow"></span></a> */
/*                                         {#  fa-wrench  Old          fa-edit         #}*/
/* */
/*                                     <ul class="nav nav-second-level"fa-edit>*/
/*                                         <li>*/
/*                                             <a href="panels-wells.html">Per Diem</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="buttons.html">Etat des frais</a>*/
/*                                         </li>*/
/* */
/*                                     </ul>*/
/*                                     <!-- second-level-items -->*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reporting<span class="fa arrow"></span></a>*/
/*                                         {# <ul class="nav nav-second-level">*/
/*                                              <li>*/
/*                                                  <a href="flot.html">Flot Charts</a>*/
/*                                              </li>*/
/*                                              <li>*/
/*                                                  <a href="morris.html">Morris Charts</a>*/
/*                                              </li>*/
/*                                          </ul>#}*/
/*                                     <!-- second-level-items -->*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="fa fa-comments fa-fw"></i>Chat<span class="fa arrow"></span></a>*/
/*                                     <ul class="nav nav-second-level">*/
/*                                         <li>*/
/*                                             <a href="blank.html">Blank Page</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="login.html">Login Page</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                     <!-- second-level-items -->*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- end side-menu -->*/
/*                         </div>*/
/*                         <!-- end sidebar-collapse -->*/
/*                     </nav>*/
/*                 {% endblock %}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!SIDE FIN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!SIDE FIN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!SIDE FIN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!SIDE FIN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/* */
/*                 <!-- end navbar side -->*/
/* */
/* */
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}*/
/*                 {#        !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!#}  */
/*                 <!--  page-wrapper -->*/
/*                 {#        {% include "::navPageLeft.html.twig" %}#}*/
/*                 bb*/
/*                 {% block menu %}*/
/*                     <div id="page-wrapper">*/
/* */
/*                         <div class="row">*/
/*                             <!-- Page Header -->*/
/*                             <div class="col-lg-12">*/
/*                                 <div class="row">*/
/*                                     <!-- Menu Assistant RH -->*/
/*                                     <div class="col-lg-12">*/
/*                                         <div class="alert label-danger" >*/
/*                                             {{ include("UtilisateursBundle:Default:menuARH.html.twig") }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!--end  Menu Assistant RH -->*/
/*                                 </div>*/
/*                                 <h1 class="page-header">Gestion des missions "Landed Ressources"</h1>*/
/*                             </div>*/
/*                             <!--End Page Header -->*/
/*                         </div>*/
/* */
/* */
/*                     {% endblock %}*/
/* */
/*                     {% block contenu %}*/
/*                         <nav class="row">*/
/*                             <div class="col-sm-10 col-sm-offset-1" style="border: 0px solid">*/
/*                                 <table border="0px" width="97%" class="menuARH">*/
/*                                     <tr>*/
/*                                         <td >*/
/*                                             <a href="#" id="projectStatus">*/
/*                                                 <span class="icons" style="background-color: #718C00">*/
/*                                                     <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>*/
/*                                                 </span> */
/*                                                 <span class="lien lien1"> Projects Status </span> */
/*                                             </a> */
/*                                         </td>*/
/*                                         <td> */
/*                                             <a href="#" id="assistCollaboratos">*/
/*                                                 <span class="icons" style="background-color: #5eb5e0">*/
/*                                                     <span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>*/
/*                                                 </span> */
/*                                                 <span class="lien lien2"> Assist Collaborators</span> */
/*                                             </a> */
/*                                         </td>*/
/*                                         <td> */
/*                                             <a href="#" id="collaborateursMission">*/
/*                                                 <span class="icons" style="background-color: #718C00">*/
/*                                                     <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>*/
/*                                                 </span> */
/*                                                 <span class="lien lien3"> Collaborators on mission </span> */
/*                                             </a> */
/*                                         </td>*/
/* */
/*                                         <td> */
/*                                             <a href="#" id="frais">*/
/*                                                 <span class="icons" style="background-color: #5eb5e0">*/
/*                                                     <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>*/
/*                                                 </span> */
/*                                                 <span class="lien lien4"> Collaborators fees </span> */
/*                                             </a> */
/*                                         </td>*/
/*                                         <td> */
/*                                             <a href="#" id="perdiem">*/
/*                                                 <span class="icons" style="background-color: #718C00">*/
/*                                                     <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>*/
/*                                                 </span> */
/*                                                 <span class="lien lien5"> Perdieme </span> */
/*                                             </a> */
/*                                         </td>*/
/*                                         <td> */
/*                                             <a href="#" id="profile">*/
/*                                                 <span class="icons" style="background-color: #5eb5e0">*/
/*                                                     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>*/
/*                                                 </span> */
/*                                                 <span class="lien lien6"> My Profile </span> */
/*                                             </a> */
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </nav>*/
/* */
/*                     </div>*/
/*                 {% endblock %}*/
/*                 <!-- end page-wrapper -->*/
/* */
/*             </div>*/
/*             <!-- end wrapper -->*/
/*         {% endblock %}*/
/* */
/* */
/* */
/*         <!-- Core Scripts - Include with every page -->*/
/*         {% block javascripts %}*/
/*             <script src="{{asset('assets/plugins/jquery-1.10.2.js')}}"></script>*/
/*             <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>*/
/*             <script src="{{asset('assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>*/
/*             <script src="{{asset('assets/plugins/pace/pace.js')}}"></script>*/
/*             <script src="{{asset('assets/scripts/siminta.js')}}"></script>*/
/*             <!-- Page-Level Plugin Scripts-->*/
/*             <script src="{{asset('assets/plugins/morris/raphael-2.1.0.min.js')}}"></script>*/
/*             <script src="{{asset('assets/plugins/morris/morris.js')}}"></script>*/
/*             <script src="{{asset('assets/scripts/dashboard-demo.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* */
/* </html>*/
/* */

<?php

/* UtilisateursBundle:Default:directeurRH.html.twig */
class __TwigTemplate_b6f45d434492d7239ac8ca854dfbd36e4e3d40f46815437e64cb2d7fb2b88421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:directeurRH.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e41ed2335217f9a20b2616c55175fb239799c8acbbd30815a65e23ff8dcc36a4 = $this->env->getExtension("native_profiler");
        $__internal_e41ed2335217f9a20b2616c55175fb239799c8acbbd30815a65e23ff8dcc36a4->enter($__internal_e41ed2335217f9a20b2616c55175fb239799c8acbbd30815a65e23ff8dcc36a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:directeurRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41ed2335217f9a20b2616c55175fb239799c8acbbd30815a65e23ff8dcc36a4->leave($__internal_e41ed2335217f9a20b2616c55175fb239799c8acbbd30815a65e23ff8dcc36a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bdca33a827f4a53bd29de6c25509e6de1c92e7d2ad212c6c8a264ef620ea549 = $this->env->getExtension("native_profiler");
        $__internal_3bdca33a827f4a53bd29de6c25509e6de1c92e7d2ad212c6c8a264ef620ea549->enter($__internal_3bdca33a827f4a53bd29de6c25509e6de1c92e7d2ad212c6c8a264ef620ea549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Directeur RH </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a>
   
    <div id=\"divProfile\">

        ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "

    </div>

";
        
        $__internal_3bdca33a827f4a53bd29de6c25509e6de1c92e7d2ad212c6c8a264ef620ea549->leave($__internal_3bdca33a827f4a53bd29de6c25509e6de1c92e7d2ad212c6c8a264ef620ea549_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:directeurRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Directeur RH </h2>*/
/*     <a href="#" id="profile"> My Profile</a>*/
/*    */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/* */
/*     </div>*/
/* */
/* {%endblock  body %}*/
/* */

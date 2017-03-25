<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7068eb62bffedb1f95b1eb1b240c527ba2bc237291f2486942692dd313b75b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9e0ab5c681e708118dbbe4971a210808493bb7f297148a61d1dfac7d4929332 = $this->env->getExtension("native_profiler");
        $__internal_a9e0ab5c681e708118dbbe4971a210808493bb7f297148a61d1dfac7d4929332->enter($__internal_a9e0ab5c681e708118dbbe4971a210808493bb7f297148a61d1dfac7d4929332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9e0ab5c681e708118dbbe4971a210808493bb7f297148a61d1dfac7d4929332->leave($__internal_a9e0ab5c681e708118dbbe4971a210808493bb7f297148a61d1dfac7d4929332_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f7c68316ff5d178e8db96a6e4c702fa7bae7f42894e8890a739d3816a668e66 = $this->env->getExtension("native_profiler");
        $__internal_3f7c68316ff5d178e8db96a6e4c702fa7bae7f42894e8890a739d3816a668e66->enter($__internal_3f7c68316ff5d178e8db96a6e4c702fa7bae7f42894e8890a739d3816a668e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3f7c68316ff5d178e8db96a6e4c702fa7bae7f42894e8890a739d3816a668e66->leave($__internal_3f7c68316ff5d178e8db96a6e4c702fa7bae7f42894e8890a739d3816a668e66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_8deed119a53917d25a40d46497a5a34c690e0900de4889ffbfe01a00041317c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_f0aedf7cf7feadb4eb6a7fb3e5d56af941cecbcccd40e614ab0af50b9f87b129 = $this->env->getExtension("native_profiler");
        $__internal_f0aedf7cf7feadb4eb6a7fb3e5d56af941cecbcccd40e614ab0af50b9f87b129->enter($__internal_f0aedf7cf7feadb4eb6a7fb3e5d56af941cecbcccd40e614ab0af50b9f87b129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0aedf7cf7feadb4eb6a7fb3e5d56af941cecbcccd40e614ab0af50b9f87b129->leave($__internal_f0aedf7cf7feadb4eb6a7fb3e5d56af941cecbcccd40e614ab0af50b9f87b129_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7579cf16fbbe5f48dee24767448cb2dd940c0b9dcae4fe9d3658ce36a1cacd7 = $this->env->getExtension("native_profiler");
        $__internal_a7579cf16fbbe5f48dee24767448cb2dd940c0b9dcae4fe9d3658ce36a1cacd7->enter($__internal_a7579cf16fbbe5f48dee24767448cb2dd940c0b9dcae4fe9d3658ce36a1cacd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a7579cf16fbbe5f48dee24767448cb2dd940c0b9dcae4fe9d3658ce36a1cacd7->leave($__internal_a7579cf16fbbe5f48dee24767448cb2dd940c0b9dcae4fe9d3658ce36a1cacd7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

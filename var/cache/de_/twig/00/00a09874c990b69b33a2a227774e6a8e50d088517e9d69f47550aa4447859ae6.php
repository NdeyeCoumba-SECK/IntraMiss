<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_491adae4bb7b7438683d19c427f6dfb725612d702c501c76921fd20f6f4ca386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_44ab93c640c08baf21ad339791ec736d3a29ddef20a32312704dd19060d634b1 = $this->env->getExtension("native_profiler");
        $__internal_44ab93c640c08baf21ad339791ec736d3a29ddef20a32312704dd19060d634b1->enter($__internal_44ab93c640c08baf21ad339791ec736d3a29ddef20a32312704dd19060d634b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ab93c640c08baf21ad339791ec736d3a29ddef20a32312704dd19060d634b1->leave($__internal_44ab93c640c08baf21ad339791ec736d3a29ddef20a32312704dd19060d634b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1728f92de1da980fb94fcd14c294d2c35c2f5cfef6a15a01f81db65f9573fe18 = $this->env->getExtension("native_profiler");
        $__internal_1728f92de1da980fb94fcd14c294d2c35c2f5cfef6a15a01f81db65f9573fe18->enter($__internal_1728f92de1da980fb94fcd14c294d2c35c2f5cfef6a15a01f81db65f9573fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_1728f92de1da980fb94fcd14c294d2c35c2f5cfef6a15a01f81db65f9573fe18->leave($__internal_1728f92de1da980fb94fcd14c294d2c35c2f5cfef6a15a01f81db65f9573fe18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

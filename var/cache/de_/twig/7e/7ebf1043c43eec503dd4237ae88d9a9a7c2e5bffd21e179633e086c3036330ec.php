<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_baba0f3b7c2a1f217b6bc812e06639870f99a8a7a34c45ad81c595652c33dc7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_8989180f2400c671fc13f8065b19595fa7ec3d6744b722af891d660eef8be71c = $this->env->getExtension("native_profiler");
        $__internal_8989180f2400c671fc13f8065b19595fa7ec3d6744b722af891d660eef8be71c->enter($__internal_8989180f2400c671fc13f8065b19595fa7ec3d6744b722af891d660eef8be71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8989180f2400c671fc13f8065b19595fa7ec3d6744b722af891d660eef8be71c->leave($__internal_8989180f2400c671fc13f8065b19595fa7ec3d6744b722af891d660eef8be71c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5c7c070ff62ef25cc5c5f0dbd828d0dc8b3f3a6b86b1450fe935c0abe6e4649 = $this->env->getExtension("native_profiler");
        $__internal_d5c7c070ff62ef25cc5c5f0dbd828d0dc8b3f3a6b86b1450fe935c0abe6e4649->enter($__internal_d5c7c070ff62ef25cc5c5f0dbd828d0dc8b3f3a6b86b1450fe935c0abe6e4649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_d5c7c070ff62ef25cc5c5f0dbd828d0dc8b3f3a6b86b1450fe935c0abe6e4649->leave($__internal_d5c7c070ff62ef25cc5c5f0dbd828d0dc8b3f3a6b86b1450fe935c0abe6e4649_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

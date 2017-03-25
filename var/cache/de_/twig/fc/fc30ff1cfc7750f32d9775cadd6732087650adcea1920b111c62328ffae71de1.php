<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2fd48e4b5e93a1513f2228926f8bb21287f7b7240eff30a3f4d911eb51bc1f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_efe6267965b19df09452c6b5f1cf64c58b5d41f0c9c02f6f48e7365b153a2ebe = $this->env->getExtension("native_profiler");
        $__internal_efe6267965b19df09452c6b5f1cf64c58b5d41f0c9c02f6f48e7365b153a2ebe->enter($__internal_efe6267965b19df09452c6b5f1cf64c58b5d41f0c9c02f6f48e7365b153a2ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe6267965b19df09452c6b5f1cf64c58b5d41f0c9c02f6f48e7365b153a2ebe->leave($__internal_efe6267965b19df09452c6b5f1cf64c58b5d41f0c9c02f6f48e7365b153a2ebe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17cd22168b1aa71b924b678972f4fba278cde65dc31dbecb9542a7f49f452503 = $this->env->getExtension("native_profiler");
        $__internal_17cd22168b1aa71b924b678972f4fba278cde65dc31dbecb9542a7f49f452503->enter($__internal_17cd22168b1aa71b924b678972f4fba278cde65dc31dbecb9542a7f49f452503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_17cd22168b1aa71b924b678972f4fba278cde65dc31dbecb9542a7f49f452503->leave($__internal_17cd22168b1aa71b924b678972f4fba278cde65dc31dbecb9542a7f49f452503_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

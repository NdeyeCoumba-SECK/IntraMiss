<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_790467b7d3ea756897f3bd4f179edec7006c9db50c3036ca16cb5084f0b8f868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_eb263585faef5cec5aa7e2a8a1635c6247d3dccdca663e1eaccc0e7ccda353fd = $this->env->getExtension("native_profiler");
        $__internal_eb263585faef5cec5aa7e2a8a1635c6247d3dccdca663e1eaccc0e7ccda353fd->enter($__internal_eb263585faef5cec5aa7e2a8a1635c6247d3dccdca663e1eaccc0e7ccda353fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb263585faef5cec5aa7e2a8a1635c6247d3dccdca663e1eaccc0e7ccda353fd->leave($__internal_eb263585faef5cec5aa7e2a8a1635c6247d3dccdca663e1eaccc0e7ccda353fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_908a1d6a2e5594715e17215dc79fd8022d6b9a939a5acaf14ac1cd99d5dd7411 = $this->env->getExtension("native_profiler");
        $__internal_908a1d6a2e5594715e17215dc79fd8022d6b9a939a5acaf14ac1cd99d5dd7411->enter($__internal_908a1d6a2e5594715e17215dc79fd8022d6b9a939a5acaf14ac1cd99d5dd7411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_908a1d6a2e5594715e17215dc79fd8022d6b9a939a5acaf14ac1cd99d5dd7411->leave($__internal_908a1d6a2e5594715e17215dc79fd8022d6b9a939a5acaf14ac1cd99d5dd7411_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

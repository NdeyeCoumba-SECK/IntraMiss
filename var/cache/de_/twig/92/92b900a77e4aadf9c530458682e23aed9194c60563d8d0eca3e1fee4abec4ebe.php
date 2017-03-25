<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_b4fdccec65664f9f89447c2dda3136267e2cd3b73b60d1a6afd7a27e4b67a997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e179a1864fe9bf2af538c73ae89bd009848c00b8bca4dca5a3487d620210db47 = $this->env->getExtension("native_profiler");
        $__internal_e179a1864fe9bf2af538c73ae89bd009848c00b8bca4dca5a3487d620210db47->enter($__internal_e179a1864fe9bf2af538c73ae89bd009848c00b8bca4dca5a3487d620210db47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e179a1864fe9bf2af538c73ae89bd009848c00b8bca4dca5a3487d620210db47->leave($__internal_e179a1864fe9bf2af538c73ae89bd009848c00b8bca4dca5a3487d620210db47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64a1e697b1d7ccc96d0557f55dc1eccd90b26bad8c0abaf8538e53a1abfe1318 = $this->env->getExtension("native_profiler");
        $__internal_64a1e697b1d7ccc96d0557f55dc1eccd90b26bad8c0abaf8538e53a1abfe1318->enter($__internal_64a1e697b1d7ccc96d0557f55dc1eccd90b26bad8c0abaf8538e53a1abfe1318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_64a1e697b1d7ccc96d0557f55dc1eccd90b26bad8c0abaf8538e53a1abfe1318->leave($__internal_64a1e697b1d7ccc96d0557f55dc1eccd90b26bad8c0abaf8538e53a1abfe1318_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

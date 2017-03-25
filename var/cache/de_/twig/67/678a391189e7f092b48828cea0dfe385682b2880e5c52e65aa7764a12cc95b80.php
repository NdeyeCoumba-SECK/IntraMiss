<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_0e6873d56042a380d12689876d51276f40323613d8acc81418d950ee5e1afae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_daed6e89acc6118bf7db84cb5b223768f68570eac158370ccc6205f33ca243b2 = $this->env->getExtension("native_profiler");
        $__internal_daed6e89acc6118bf7db84cb5b223768f68570eac158370ccc6205f33ca243b2->enter($__internal_daed6e89acc6118bf7db84cb5b223768f68570eac158370ccc6205f33ca243b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daed6e89acc6118bf7db84cb5b223768f68570eac158370ccc6205f33ca243b2->leave($__internal_daed6e89acc6118bf7db84cb5b223768f68570eac158370ccc6205f33ca243b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b03119ec9dd48f5fa2742a72c699e386e55e0e4fb2167a8580a88b4b97871449 = $this->env->getExtension("native_profiler");
        $__internal_b03119ec9dd48f5fa2742a72c699e386e55e0e4fb2167a8580a88b4b97871449->enter($__internal_b03119ec9dd48f5fa2742a72c699e386e55e0e4fb2167a8580a88b4b97871449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b03119ec9dd48f5fa2742a72c699e386e55e0e4fb2167a8580a88b4b97871449->leave($__internal_b03119ec9dd48f5fa2742a72c699e386e55e0e4fb2167a8580a88b4b97871449_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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

<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_160e30346d6cbd73124cdf8213c1a379dba06339e484cd9dec361d6093af6f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_542fb901f3bc020366efda63873a2abfee34b5a110c657ce5e1f0f0e20291464 = $this->env->getExtension("native_profiler");
        $__internal_542fb901f3bc020366efda63873a2abfee34b5a110c657ce5e1f0f0e20291464->enter($__internal_542fb901f3bc020366efda63873a2abfee34b5a110c657ce5e1f0f0e20291464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_542fb901f3bc020366efda63873a2abfee34b5a110c657ce5e1f0f0e20291464->leave($__internal_542fb901f3bc020366efda63873a2abfee34b5a110c657ce5e1f0f0e20291464_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_781eaaeb58dddd597ccb70e461a8fd51a20068976e7bf7212839835ed1ec021e = $this->env->getExtension("native_profiler");
        $__internal_781eaaeb58dddd597ccb70e461a8fd51a20068976e7bf7212839835ed1ec021e->enter($__internal_781eaaeb58dddd597ccb70e461a8fd51a20068976e7bf7212839835ed1ec021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_781eaaeb58dddd597ccb70e461a8fd51a20068976e7bf7212839835ed1ec021e->leave($__internal_781eaaeb58dddd597ccb70e461a8fd51a20068976e7bf7212839835ed1ec021e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

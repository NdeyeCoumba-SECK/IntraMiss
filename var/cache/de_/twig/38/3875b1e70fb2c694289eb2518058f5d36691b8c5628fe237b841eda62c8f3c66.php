<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a2d8f38392b7175513295a8ae9a025d027d75905f071238ca06eedc177ba4b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4bab3bb64784022f2ef85c26d2ba47e3dadf9b0e20049b4a2508825d164599f1 = $this->env->getExtension("native_profiler");
        $__internal_4bab3bb64784022f2ef85c26d2ba47e3dadf9b0e20049b4a2508825d164599f1->enter($__internal_4bab3bb64784022f2ef85c26d2ba47e3dadf9b0e20049b4a2508825d164599f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bab3bb64784022f2ef85c26d2ba47e3dadf9b0e20049b4a2508825d164599f1->leave($__internal_4bab3bb64784022f2ef85c26d2ba47e3dadf9b0e20049b4a2508825d164599f1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6058fef2c38bc8ef03d05c1a8b3b2657122b2640ec6e767190af9d789f599fe = $this->env->getExtension("native_profiler");
        $__internal_e6058fef2c38bc8ef03d05c1a8b3b2657122b2640ec6e767190af9d789f599fe->enter($__internal_e6058fef2c38bc8ef03d05c1a8b3b2657122b2640ec6e767190af9d789f599fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e6058fef2c38bc8ef03d05c1a8b3b2657122b2640ec6e767190af9d789f599fe->leave($__internal_e6058fef2c38bc8ef03d05c1a8b3b2657122b2640ec6e767190af9d789f599fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_695e0b11320a1de0e0bf2f4f05cf3915ede3bdfaa231d134f06299a4b5c474dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_394e2cfa9e9a1849114dc6b739da89dfabea1a8c70359cedb0f356ea8d69315a = $this->env->getExtension("native_profiler");
        $__internal_394e2cfa9e9a1849114dc6b739da89dfabea1a8c70359cedb0f356ea8d69315a->enter($__internal_394e2cfa9e9a1849114dc6b739da89dfabea1a8c70359cedb0f356ea8d69315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394e2cfa9e9a1849114dc6b739da89dfabea1a8c70359cedb0f356ea8d69315a->leave($__internal_394e2cfa9e9a1849114dc6b739da89dfabea1a8c70359cedb0f356ea8d69315a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f440f8109fa3769ecd9714fb0f3a34a75a7cb700216b73eb555e2785d8dc9242 = $this->env->getExtension("native_profiler");
        $__internal_f440f8109fa3769ecd9714fb0f3a34a75a7cb700216b73eb555e2785d8dc9242->enter($__internal_f440f8109fa3769ecd9714fb0f3a34a75a7cb700216b73eb555e2785d8dc9242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f440f8109fa3769ecd9714fb0f3a34a75a7cb700216b73eb555e2785d8dc9242->leave($__internal_f440f8109fa3769ecd9714fb0f3a34a75a7cb700216b73eb555e2785d8dc9242_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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

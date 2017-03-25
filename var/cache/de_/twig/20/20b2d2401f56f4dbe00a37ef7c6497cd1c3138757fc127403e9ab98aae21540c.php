<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_787798b82f2db9d61b9bcd48d5ffa6594cb85f48b18a8858969e780189972407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_73abd33f6b26f1e6f79c6b84d48335403e4fc2e4b7a7d4c4f48c8bfee949d841 = $this->env->getExtension("native_profiler");
        $__internal_73abd33f6b26f1e6f79c6b84d48335403e4fc2e4b7a7d4c4f48c8bfee949d841->enter($__internal_73abd33f6b26f1e6f79c6b84d48335403e4fc2e4b7a7d4c4f48c8bfee949d841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73abd33f6b26f1e6f79c6b84d48335403e4fc2e4b7a7d4c4f48c8bfee949d841->leave($__internal_73abd33f6b26f1e6f79c6b84d48335403e4fc2e4b7a7d4c4f48c8bfee949d841_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a83cea7c7f841cbb70d04d71d630cae90567606174eaddb1dbee537210400233 = $this->env->getExtension("native_profiler");
        $__internal_a83cea7c7f841cbb70d04d71d630cae90567606174eaddb1dbee537210400233->enter($__internal_a83cea7c7f841cbb70d04d71d630cae90567606174eaddb1dbee537210400233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a83cea7c7f841cbb70d04d71d630cae90567606174eaddb1dbee537210400233->leave($__internal_a83cea7c7f841cbb70d04d71d630cae90567606174eaddb1dbee537210400233_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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

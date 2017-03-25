<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7ebf1dca054399301850371d1d4fd3fe6afe29f83e7656f5c1b67720c88126a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_3c7d9d2645f2d88551700964c11dca829f5c09831283427ff3a764a596b0e997 = $this->env->getExtension("native_profiler");
        $__internal_3c7d9d2645f2d88551700964c11dca829f5c09831283427ff3a764a596b0e997->enter($__internal_3c7d9d2645f2d88551700964c11dca829f5c09831283427ff3a764a596b0e997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c7d9d2645f2d88551700964c11dca829f5c09831283427ff3a764a596b0e997->leave($__internal_3c7d9d2645f2d88551700964c11dca829f5c09831283427ff3a764a596b0e997_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a581a2c54278a851cdd84204aa3f8b6bb0b1650873d763df605b8bbcc8247ea = $this->env->getExtension("native_profiler");
        $__internal_6a581a2c54278a851cdd84204aa3f8b6bb0b1650873d763df605b8bbcc8247ea->enter($__internal_6a581a2c54278a851cdd84204aa3f8b6bb0b1650873d763df605b8bbcc8247ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6a581a2c54278a851cdd84204aa3f8b6bb0b1650873d763df605b8bbcc8247ea->leave($__internal_6a581a2c54278a851cdd84204aa3f8b6bb0b1650873d763df605b8bbcc8247ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

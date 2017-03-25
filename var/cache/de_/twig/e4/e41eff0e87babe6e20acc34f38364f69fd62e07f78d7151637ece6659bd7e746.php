<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_cb4e0b9b7b14f2c2e2603106c42e6ef79a4252b1a931fee7e3accb51e763cc8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68c3a1e1cf7ba1ddf5fb7d45938be4dd658ca0055c00afc35bf182ac00dd002b = $this->env->getExtension("native_profiler");
        $__internal_68c3a1e1cf7ba1ddf5fb7d45938be4dd658ca0055c00afc35bf182ac00dd002b->enter($__internal_68c3a1e1cf7ba1ddf5fb7d45938be4dd658ca0055c00afc35bf182ac00dd002b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_68c3a1e1cf7ba1ddf5fb7d45938be4dd658ca0055c00afc35bf182ac00dd002b->leave($__internal_68c3a1e1cf7ba1ddf5fb7d45938be4dd658ca0055c00afc35bf182ac00dd002b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

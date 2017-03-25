<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_47fad1cb893980034305717ca555ff95ba86f41367a1ca362eab2ef246f31cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_614313a1ba4a669dc426e6c86c8365aa7ae3b24ae6dc61dbb3b5fbd1b576e4a1 = $this->env->getExtension("native_profiler");
        $__internal_614313a1ba4a669dc426e6c86c8365aa7ae3b24ae6dc61dbb3b5fbd1b576e4a1->enter($__internal_614313a1ba4a669dc426e6c86c8365aa7ae3b24ae6dc61dbb3b5fbd1b576e4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614313a1ba4a669dc426e6c86c8365aa7ae3b24ae6dc61dbb3b5fbd1b576e4a1->leave($__internal_614313a1ba4a669dc426e6c86c8365aa7ae3b24ae6dc61dbb3b5fbd1b576e4a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7a5b5fbd72dd0df720b2e50012d66e9eba5024ab7529390c2a66564cf732a81 = $this->env->getExtension("native_profiler");
        $__internal_d7a5b5fbd72dd0df720b2e50012d66e9eba5024ab7529390c2a66564cf732a81->enter($__internal_d7a5b5fbd72dd0df720b2e50012d66e9eba5024ab7529390c2a66564cf732a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d7a5b5fbd72dd0df720b2e50012d66e9eba5024ab7529390c2a66564cf732a81->leave($__internal_d7a5b5fbd72dd0df720b2e50012d66e9eba5024ab7529390c2a66564cf732a81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

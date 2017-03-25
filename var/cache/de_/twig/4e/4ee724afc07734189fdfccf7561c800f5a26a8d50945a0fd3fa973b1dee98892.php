<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_51c730766876dc1d9e6fd5d3929455b367662cd5b635d1f7f7ad6405c1473e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0620ed09ac7b7ebb42cee34e81e75984f49ca0a85ef34636ca9d75415927ddab = $this->env->getExtension("native_profiler");
        $__internal_0620ed09ac7b7ebb42cee34e81e75984f49ca0a85ef34636ca9d75415927ddab->enter($__internal_0620ed09ac7b7ebb42cee34e81e75984f49ca0a85ef34636ca9d75415927ddab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0620ed09ac7b7ebb42cee34e81e75984f49ca0a85ef34636ca9d75415927ddab->leave($__internal_0620ed09ac7b7ebb42cee34e81e75984f49ca0a85ef34636ca9d75415927ddab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1193d2287cbfc8857097f717504bb5d33910a0235a09ba09999a410723f3b811 = $this->env->getExtension("native_profiler");
        $__internal_1193d2287cbfc8857097f717504bb5d33910a0235a09ba09999a410723f3b811->enter($__internal_1193d2287cbfc8857097f717504bb5d33910a0235a09ba09999a410723f3b811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1193d2287cbfc8857097f717504bb5d33910a0235a09ba09999a410723f3b811->leave($__internal_1193d2287cbfc8857097f717504bb5d33910a0235a09ba09999a410723f3b811_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

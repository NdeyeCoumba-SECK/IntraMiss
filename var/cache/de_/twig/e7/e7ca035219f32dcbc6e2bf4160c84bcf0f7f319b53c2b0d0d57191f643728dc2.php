<?php

/* ::base.html.twig */
class __TwigTemplate_2e0eb75d3049a8cd1f478c31bd5360e6b6ea052bdcff75acfe79b2b95f27ccea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db9a98621f3e5b056e8297538fa303e33eeb85a4fb002216312399395df682ec = $this->env->getExtension("native_profiler");
        $__internal_db9a98621f3e5b056e8297538fa303e33eeb85a4fb002216312399395df682ec->enter($__internal_db9a98621f3e5b056e8297538fa303e33eeb85a4fb002216312399395df682ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_db9a98621f3e5b056e8297538fa303e33eeb85a4fb002216312399395df682ec->leave($__internal_db9a98621f3e5b056e8297538fa303e33eeb85a4fb002216312399395df682ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29bf0d2a4f15c55a376d304d1b35e706c895a79e40604ce1400221481b1c3413 = $this->env->getExtension("native_profiler");
        $__internal_29bf0d2a4f15c55a376d304d1b35e706c895a79e40604ce1400221481b1c3413->enter($__internal_29bf0d2a4f15c55a376d304d1b35e706c895a79e40604ce1400221481b1c3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_29bf0d2a4f15c55a376d304d1b35e706c895a79e40604ce1400221481b1c3413->leave($__internal_29bf0d2a4f15c55a376d304d1b35e706c895a79e40604ce1400221481b1c3413_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_361c1a8e2f45abc95e25dbb0e9d2e48b249c81bfc1406c47ee718cc2379fa432 = $this->env->getExtension("native_profiler");
        $__internal_361c1a8e2f45abc95e25dbb0e9d2e48b249c81bfc1406c47ee718cc2379fa432->enter($__internal_361c1a8e2f45abc95e25dbb0e9d2e48b249c81bfc1406c47ee718cc2379fa432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_361c1a8e2f45abc95e25dbb0e9d2e48b249c81bfc1406c47ee718cc2379fa432->leave($__internal_361c1a8e2f45abc95e25dbb0e9d2e48b249c81bfc1406c47ee718cc2379fa432_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_58737f90b1b758ecfda1627a0626657abb3453c81b42cb6a8fedf1518129c3fa = $this->env->getExtension("native_profiler");
        $__internal_58737f90b1b758ecfda1627a0626657abb3453c81b42cb6a8fedf1518129c3fa->enter($__internal_58737f90b1b758ecfda1627a0626657abb3453c81b42cb6a8fedf1518129c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58737f90b1b758ecfda1627a0626657abb3453c81b42cb6a8fedf1518129c3fa->leave($__internal_58737f90b1b758ecfda1627a0626657abb3453c81b42cb6a8fedf1518129c3fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f53320ee9f50ef41d71963bfbf88b23ed614429837b17d6d248fef665d2813e = $this->env->getExtension("native_profiler");
        $__internal_7f53320ee9f50ef41d71963bfbf88b23ed614429837b17d6d248fef665d2813e->enter($__internal_7f53320ee9f50ef41d71963bfbf88b23ed614429837b17d6d248fef665d2813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f53320ee9f50ef41d71963bfbf88b23ed614429837b17d6d248fef665d2813e->leave($__internal_7f53320ee9f50ef41d71963bfbf88b23ed614429837b17d6d248fef665d2813e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

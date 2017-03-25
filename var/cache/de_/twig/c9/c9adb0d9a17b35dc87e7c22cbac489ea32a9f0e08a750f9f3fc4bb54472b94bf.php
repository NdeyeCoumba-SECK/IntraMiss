<?php

/* principale.html.twig */
class __TwigTemplate_a8d304eab72018f8260fc07270328dd5580662efbe73babed7a0f22d4addf510 extends Twig_Template
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
        $__internal_0f81cc66703a32d3421aaf45d1247ea1128d32d97a10267144a628dd582dc050 = $this->env->getExtension("native_profiler");
        $__internal_0f81cc66703a32d3421aaf45d1247ea1128d32d97a10267144a628dd582dc050->enter($__internal_0f81cc66703a32d3421aaf45d1247ea1128d32d97a10267144a628dd582dc050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "principale.html.twig"));

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
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_0f81cc66703a32d3421aaf45d1247ea1128d32d97a10267144a628dd582dc050->leave($__internal_0f81cc66703a32d3421aaf45d1247ea1128d32d97a10267144a628dd582dc050_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca3ce8be589b16cd820e6a089130eed0e383ff92c708b7919b6a831e0b6bb5a = $this->env->getExtension("native_profiler");
        $__internal_bca3ce8be589b16cd820e6a089130eed0e383ff92c708b7919b6a831e0b6bb5a->enter($__internal_bca3ce8be589b16cd820e6a089130eed0e383ff92c708b7919b6a831e0b6bb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bca3ce8be589b16cd820e6a089130eed0e383ff92c708b7919b6a831e0b6bb5a->leave($__internal_bca3ce8be589b16cd820e6a089130eed0e383ff92c708b7919b6a831e0b6bb5a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_381108a02fbf3931bd4caa3ba4e9539965fb047b8ce2c80a214672fbab980d6a = $this->env->getExtension("native_profiler");
        $__internal_381108a02fbf3931bd4caa3ba4e9539965fb047b8ce2c80a214672fbab980d6a->enter($__internal_381108a02fbf3931bd4caa3ba4e9539965fb047b8ce2c80a214672fbab980d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_381108a02fbf3931bd4caa3ba4e9539965fb047b8ce2c80a214672fbab980d6a->leave($__internal_381108a02fbf3931bd4caa3ba4e9539965fb047b8ce2c80a214672fbab980d6a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f69b99be6d875449c8bdd5985fc6f98de9d4c0526a7746a12d91775bc9e8ff = $this->env->getExtension("native_profiler");
        $__internal_47f69b99be6d875449c8bdd5985fc6f98de9d4c0526a7746a12d91775bc9e8ff->enter($__internal_47f69b99be6d875449c8bdd5985fc6f98de9d4c0526a7746a12d91775bc9e8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_47f69b99be6d875449c8bdd5985fc6f98de9d4c0526a7746a12d91775bc9e8ff->leave($__internal_47f69b99be6d875449c8bdd5985fc6f98de9d4c0526a7746a12d91775bc9e8ff_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe6badd846f6e22ff57af44b751e060001b098ca70eb84f7e9ffdfd645d314fc = $this->env->getExtension("native_profiler");
        $__internal_fe6badd846f6e22ff57af44b751e060001b098ca70eb84f7e9ffdfd645d314fc->enter($__internal_fe6badd846f6e22ff57af44b751e060001b098ca70eb84f7e9ffdfd645d314fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fe6badd846f6e22ff57af44b751e060001b098ca70eb84f7e9ffdfd645d314fc->leave($__internal_fe6badd846f6e22ff57af44b751e060001b098ca70eb84f7e9ffdfd645d314fc_prof);

    }

    public function getTemplateName()
    {
        return "principale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 16,  109 => 15,  103 => 14,  92 => 13,  83 => 9,  79 => 8,  74 => 7,  68 => 6,  56 => 5,  47 => 18,  44 => 14,  42 => 13,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*          <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*          <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

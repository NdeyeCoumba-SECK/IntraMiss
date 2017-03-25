<?php

/* ::principale.html.twig */
class __TwigTemplate_b57a293a9b71995d1ac1f4747df85c5cddc176f0ecf9dec256e20d10a4f8a831 extends Twig_Template
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
        $__internal_9e8849fbba1782e45f7837b8bf2cd1725469d405f32d95cdb6480ed7fc31d0ab = $this->env->getExtension("native_profiler");
        $__internal_9e8849fbba1782e45f7837b8bf2cd1725469d405f32d95cdb6480ed7fc31d0ab->enter($__internal_9e8849fbba1782e45f7837b8bf2cd1725469d405f32d95cdb6480ed7fc31d0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::principale.html.twig"));

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
        
        $__internal_9e8849fbba1782e45f7837b8bf2cd1725469d405f32d95cdb6480ed7fc31d0ab->leave($__internal_9e8849fbba1782e45f7837b8bf2cd1725469d405f32d95cdb6480ed7fc31d0ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_13cd20830ef916067a5627c4ecd840b233633820855faffe35bd70e455833f13 = $this->env->getExtension("native_profiler");
        $__internal_13cd20830ef916067a5627c4ecd840b233633820855faffe35bd70e455833f13->enter($__internal_13cd20830ef916067a5627c4ecd840b233633820855faffe35bd70e455833f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_13cd20830ef916067a5627c4ecd840b233633820855faffe35bd70e455833f13->leave($__internal_13cd20830ef916067a5627c4ecd840b233633820855faffe35bd70e455833f13_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bafac94dd52ab0c86a1c6b862ce6ddbe4a953a0f75003ce5f2e63d5ef33b5818 = $this->env->getExtension("native_profiler");
        $__internal_bafac94dd52ab0c86a1c6b862ce6ddbe4a953a0f75003ce5f2e63d5ef33b5818->enter($__internal_bafac94dd52ab0c86a1c6b862ce6ddbe4a953a0f75003ce5f2e63d5ef33b5818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bafac94dd52ab0c86a1c6b862ce6ddbe4a953a0f75003ce5f2e63d5ef33b5818->leave($__internal_bafac94dd52ab0c86a1c6b862ce6ddbe4a953a0f75003ce5f2e63d5ef33b5818_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_59155188e1331a8c416bfa1858567123408264f7a10e604b02bd1047a6e065c5 = $this->env->getExtension("native_profiler");
        $__internal_59155188e1331a8c416bfa1858567123408264f7a10e604b02bd1047a6e065c5->enter($__internal_59155188e1331a8c416bfa1858567123408264f7a10e604b02bd1047a6e065c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_59155188e1331a8c416bfa1858567123408264f7a10e604b02bd1047a6e065c5->leave($__internal_59155188e1331a8c416bfa1858567123408264f7a10e604b02bd1047a6e065c5_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a274cbdc2d1fd04011c5af96ead589b0d28a54a54c5cdcd1a1443cd4da247f6 = $this->env->getExtension("native_profiler");
        $__internal_1a274cbdc2d1fd04011c5af96ead589b0d28a54a54c5cdcd1a1443cd4da247f6->enter($__internal_1a274cbdc2d1fd04011c5af96ead589b0d28a54a54c5cdcd1a1443cd4da247f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1a274cbdc2d1fd04011c5af96ead589b0d28a54a54c5cdcd1a1443cd4da247f6->leave($__internal_1a274cbdc2d1fd04011c5af96ead589b0d28a54a54c5cdcd1a1443cd4da247f6_prof);

    }

    public function getTemplateName()
    {
        return "::principale.html.twig";
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

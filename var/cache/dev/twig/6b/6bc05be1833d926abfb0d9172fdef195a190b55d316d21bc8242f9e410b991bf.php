<?php

/* ::principale.html.twig */
class __TwigTemplate_386d221c4c04bb4a96390a68d1808a07aa97a47f90817090f34b95c046c3bbac extends Twig_Template
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
        $__internal_bab3874172b113caeb0c142fe8cecc92440e6798fd29ed20d73eb598e435a5fc = $this->env->getExtension("native_profiler");
        $__internal_bab3874172b113caeb0c142fe8cecc92440e6798fd29ed20d73eb598e435a5fc->enter($__internal_bab3874172b113caeb0c142fe8cecc92440e6798fd29ed20d73eb598e435a5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::principale.html.twig"));

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
        
        $__internal_bab3874172b113caeb0c142fe8cecc92440e6798fd29ed20d73eb598e435a5fc->leave($__internal_bab3874172b113caeb0c142fe8cecc92440e6798fd29ed20d73eb598e435a5fc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a3dcd2c27ee9f6f1e7304fe5485b548292a77462e5d93322f0feaffc7eb46c3 = $this->env->getExtension("native_profiler");
        $__internal_2a3dcd2c27ee9f6f1e7304fe5485b548292a77462e5d93322f0feaffc7eb46c3->enter($__internal_2a3dcd2c27ee9f6f1e7304fe5485b548292a77462e5d93322f0feaffc7eb46c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a3dcd2c27ee9f6f1e7304fe5485b548292a77462e5d93322f0feaffc7eb46c3->leave($__internal_2a3dcd2c27ee9f6f1e7304fe5485b548292a77462e5d93322f0feaffc7eb46c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9de43cc8f010cb8262be56e032b851bf632c3cd3cea7137c857adaa70ea47ebb = $this->env->getExtension("native_profiler");
        $__internal_9de43cc8f010cb8262be56e032b851bf632c3cd3cea7137c857adaa70ea47ebb->enter($__internal_9de43cc8f010cb8262be56e032b851bf632c3cd3cea7137c857adaa70ea47ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9de43cc8f010cb8262be56e032b851bf632c3cd3cea7137c857adaa70ea47ebb->leave($__internal_9de43cc8f010cb8262be56e032b851bf632c3cd3cea7137c857adaa70ea47ebb_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c09305f9483f34d1ca3ab305287eee4da6d81e16f62316bfab6c472aa59e79a2 = $this->env->getExtension("native_profiler");
        $__internal_c09305f9483f34d1ca3ab305287eee4da6d81e16f62316bfab6c472aa59e79a2->enter($__internal_c09305f9483f34d1ca3ab305287eee4da6d81e16f62316bfab6c472aa59e79a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c09305f9483f34d1ca3ab305287eee4da6d81e16f62316bfab6c472aa59e79a2->leave($__internal_c09305f9483f34d1ca3ab305287eee4da6d81e16f62316bfab6c472aa59e79a2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6af62811277e101458be70f7534613a46a91bbcd082e952b9da8c8e3f8629be = $this->env->getExtension("native_profiler");
        $__internal_c6af62811277e101458be70f7534613a46a91bbcd082e952b9da8c8e3f8629be->enter($__internal_c6af62811277e101458be70f7534613a46a91bbcd082e952b9da8c8e3f8629be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c6af62811277e101458be70f7534613a46a91bbcd082e952b9da8c8e3f8629be->leave($__internal_c6af62811277e101458be70f7534613a46a91bbcd082e952b9da8c8e3f8629be_prof);

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

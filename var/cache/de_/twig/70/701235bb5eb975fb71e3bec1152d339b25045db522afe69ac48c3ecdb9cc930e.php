<?php

/* base.html.twig */
class __TwigTemplate_c3cf9536eac51c64020a483603bad3db6719302c30ab91244e3a834d3d4807ce extends Twig_Template
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
        $__internal_846b254f1fc4aa32224a3e729d9ba88e0baf26791b2fcd58d27ff575de9b4ef2 = $this->env->getExtension("native_profiler");
        $__internal_846b254f1fc4aa32224a3e729d9ba88e0baf26791b2fcd58d27ff575de9b4ef2->enter($__internal_846b254f1fc4aa32224a3e729d9ba88e0baf26791b2fcd58d27ff575de9b4ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_846b254f1fc4aa32224a3e729d9ba88e0baf26791b2fcd58d27ff575de9b4ef2->leave($__internal_846b254f1fc4aa32224a3e729d9ba88e0baf26791b2fcd58d27ff575de9b4ef2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e74b1d5d6043fb49a740f8de1cc0cd1d7a39a9c37e6149059c1debac5c74019 = $this->env->getExtension("native_profiler");
        $__internal_7e74b1d5d6043fb49a740f8de1cc0cd1d7a39a9c37e6149059c1debac5c74019->enter($__internal_7e74b1d5d6043fb49a740f8de1cc0cd1d7a39a9c37e6149059c1debac5c74019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7e74b1d5d6043fb49a740f8de1cc0cd1d7a39a9c37e6149059c1debac5c74019->leave($__internal_7e74b1d5d6043fb49a740f8de1cc0cd1d7a39a9c37e6149059c1debac5c74019_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fad4e39f0de9f4c00666c6c3ed45c4d57c6388553ebdd5a80611dad71a1471f = $this->env->getExtension("native_profiler");
        $__internal_1fad4e39f0de9f4c00666c6c3ed45c4d57c6388553ebdd5a80611dad71a1471f->enter($__internal_1fad4e39f0de9f4c00666c6c3ed45c4d57c6388553ebdd5a80611dad71a1471f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1fad4e39f0de9f4c00666c6c3ed45c4d57c6388553ebdd5a80611dad71a1471f->leave($__internal_1fad4e39f0de9f4c00666c6c3ed45c4d57c6388553ebdd5a80611dad71a1471f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2765669a33874b392e029e0d4094927aa4a1f04e858ae9b70c47b51614553eb8 = $this->env->getExtension("native_profiler");
        $__internal_2765669a33874b392e029e0d4094927aa4a1f04e858ae9b70c47b51614553eb8->enter($__internal_2765669a33874b392e029e0d4094927aa4a1f04e858ae9b70c47b51614553eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2765669a33874b392e029e0d4094927aa4a1f04e858ae9b70c47b51614553eb8->leave($__internal_2765669a33874b392e029e0d4094927aa4a1f04e858ae9b70c47b51614553eb8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35ace94ad6057d123999472a5f0131391af4f6b18fac57fdcd70745be923e5ea = $this->env->getExtension("native_profiler");
        $__internal_35ace94ad6057d123999472a5f0131391af4f6b18fac57fdcd70745be923e5ea->enter($__internal_35ace94ad6057d123999472a5f0131391af4f6b18fac57fdcd70745be923e5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35ace94ad6057d123999472a5f0131391af4f6b18fac57fdcd70745be923e5ea->leave($__internal_35ace94ad6057d123999472a5f0131391af4f6b18fac57fdcd70745be923e5ea_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

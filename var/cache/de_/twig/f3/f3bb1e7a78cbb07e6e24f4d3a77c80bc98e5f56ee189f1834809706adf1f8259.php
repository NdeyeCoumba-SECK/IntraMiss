<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_20ea963de3ab3a4badb336c27dfe25f3b2c941e9693078f2096217094b465a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d343709c3145179056c7b6efd6c87f8b74be1eac0b81c752a6715ee9a0d0a331 = $this->env->getExtension("native_profiler");
        $__internal_d343709c3145179056c7b6efd6c87f8b74be1eac0b81c752a6715ee9a0d0a331->enter($__internal_d343709c3145179056c7b6efd6c87f8b74be1eac0b81c752a6715ee9a0d0a331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d343709c3145179056c7b6efd6c87f8b74be1eac0b81c752a6715ee9a0d0a331->leave($__internal_d343709c3145179056c7b6efd6c87f8b74be1eac0b81c752a6715ee9a0d0a331_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_314c5396f5225824c724b93764e129a786dd7229763d63ec81168eb155d4c894 = $this->env->getExtension("native_profiler");
        $__internal_314c5396f5225824c724b93764e129a786dd7229763d63ec81168eb155d4c894->enter($__internal_314c5396f5225824c724b93764e129a786dd7229763d63ec81168eb155d4c894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_314c5396f5225824c724b93764e129a786dd7229763d63ec81168eb155d4c894->leave($__internal_314c5396f5225824c724b93764e129a786dd7229763d63ec81168eb155d4c894_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef276af68cf84bade76ffad718bb06aa4b1904716ea8501a82b40467cc38f39 = $this->env->getExtension("native_profiler");
        $__internal_0ef276af68cf84bade76ffad718bb06aa4b1904716ea8501a82b40467cc38f39->enter($__internal_0ef276af68cf84bade76ffad718bb06aa4b1904716ea8501a82b40467cc38f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0ef276af68cf84bade76ffad718bb06aa4b1904716ea8501a82b40467cc38f39->leave($__internal_0ef276af68cf84bade76ffad718bb06aa4b1904716ea8501a82b40467cc38f39_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_792854f89d993b329291c73d25715f7df5ae100f5d4312f61a71c9e148d20c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a762f7ff8f4a69459b5e1f67f0c37b998331bcda935edee2313563ad22c3c679 = $this->env->getExtension("native_profiler");
        $__internal_a762f7ff8f4a69459b5e1f67f0c37b998331bcda935edee2313563ad22c3c679->enter($__internal_a762f7ff8f4a69459b5e1f67f0c37b998331bcda935edee2313563ad22c3c679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a762f7ff8f4a69459b5e1f67f0c37b998331bcda935edee2313563ad22c3c679->leave($__internal_a762f7ff8f4a69459b5e1f67f0c37b998331bcda935edee2313563ad22c3c679_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7afc2eeb74122853bccc908defe3baee156ef13d9814a88a95e5b58b088eceb = $this->env->getExtension("native_profiler");
        $__internal_e7afc2eeb74122853bccc908defe3baee156ef13d9814a88a95e5b58b088eceb->enter($__internal_e7afc2eeb74122853bccc908defe3baee156ef13d9814a88a95e5b58b088eceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e7afc2eeb74122853bccc908defe3baee156ef13d9814a88a95e5b58b088eceb->leave($__internal_e7afc2eeb74122853bccc908defe3baee156ef13d9814a88a95e5b58b088eceb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f55be15ee21d3bdf1f86cc682910d78a4f0a627da4ae6e2bdba50b32b3c7ba = $this->env->getExtension("native_profiler");
        $__internal_33f55be15ee21d3bdf1f86cc682910d78a4f0a627da4ae6e2bdba50b32b3c7ba->enter($__internal_33f55be15ee21d3bdf1f86cc682910d78a4f0a627da4ae6e2bdba50b32b3c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33f55be15ee21d3bdf1f86cc682910d78a4f0a627da4ae6e2bdba50b32b3c7ba->leave($__internal_33f55be15ee21d3bdf1f86cc682910d78a4f0a627da4ae6e2bdba50b32b3c7ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a04956b3745e4b96c260a657b54f7ac4b10a44fb58b3fe2e7be32b6475c91140 = $this->env->getExtension("native_profiler");
        $__internal_a04956b3745e4b96c260a657b54f7ac4b10a44fb58b3fe2e7be32b6475c91140->enter($__internal_a04956b3745e4b96c260a657b54f7ac4b10a44fb58b3fe2e7be32b6475c91140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a04956b3745e4b96c260a657b54f7ac4b10a44fb58b3fe2e7be32b6475c91140->leave($__internal_a04956b3745e4b96c260a657b54f7ac4b10a44fb58b3fe2e7be32b6475c91140_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

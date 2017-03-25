<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9d1acc5861ec38fcea6ada6ac8aaf3625147a07a04b1684742c80b67f80f9e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_2d6b3f095336cfabc19224cf182022399c3ce99e35d6ebb69247be6cec73318f = $this->env->getExtension("native_profiler");
        $__internal_2d6b3f095336cfabc19224cf182022399c3ce99e35d6ebb69247be6cec73318f->enter($__internal_2d6b3f095336cfabc19224cf182022399c3ce99e35d6ebb69247be6cec73318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6b3f095336cfabc19224cf182022399c3ce99e35d6ebb69247be6cec73318f->leave($__internal_2d6b3f095336cfabc19224cf182022399c3ce99e35d6ebb69247be6cec73318f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b34886fb748aba55ad03b3c4432779dc2e378c3f8f7cbcf4b84d93036aa1e70f = $this->env->getExtension("native_profiler");
        $__internal_b34886fb748aba55ad03b3c4432779dc2e378c3f8f7cbcf4b84d93036aa1e70f->enter($__internal_b34886fb748aba55ad03b3c4432779dc2e378c3f8f7cbcf4b84d93036aa1e70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b34886fb748aba55ad03b3c4432779dc2e378c3f8f7cbcf4b84d93036aa1e70f->leave($__internal_b34886fb748aba55ad03b3c4432779dc2e378c3f8f7cbcf4b84d93036aa1e70f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe65d246ba7262d730749a6ebac49d9d4c462455bd57604ffd30677e2cd8b01c = $this->env->getExtension("native_profiler");
        $__internal_fe65d246ba7262d730749a6ebac49d9d4c462455bd57604ffd30677e2cd8b01c->enter($__internal_fe65d246ba7262d730749a6ebac49d9d4c462455bd57604ffd30677e2cd8b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe65d246ba7262d730749a6ebac49d9d4c462455bd57604ffd30677e2cd8b01c->leave($__internal_fe65d246ba7262d730749a6ebac49d9d4c462455bd57604ffd30677e2cd8b01c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b462486cf2270e45a865f6d73e90a11b3feeda36ea87c413faad02508d95d4a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c2bfd6e9e9d95f067b4a13887dc7d97a1304759d2bb65b41a47e34d7f5d1f9be = $this->env->getExtension("native_profiler");
        $__internal_c2bfd6e9e9d95f067b4a13887dc7d97a1304759d2bb65b41a47e34d7f5d1f9be->enter($__internal_c2bfd6e9e9d95f067b4a13887dc7d97a1304759d2bb65b41a47e34d7f5d1f9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2bfd6e9e9d95f067b4a13887dc7d97a1304759d2bb65b41a47e34d7f5d1f9be->leave($__internal_c2bfd6e9e9d95f067b4a13887dc7d97a1304759d2bb65b41a47e34d7f5d1f9be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89761ad6c8debdcb4e9392258d30af50a6664a19b7d23bb9165632fd67fe64fc = $this->env->getExtension("native_profiler");
        $__internal_89761ad6c8debdcb4e9392258d30af50a6664a19b7d23bb9165632fd67fe64fc->enter($__internal_89761ad6c8debdcb4e9392258d30af50a6664a19b7d23bb9165632fd67fe64fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89761ad6c8debdcb4e9392258d30af50a6664a19b7d23bb9165632fd67fe64fc->leave($__internal_89761ad6c8debdcb4e9392258d30af50a6664a19b7d23bb9165632fd67fe64fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_488fe03c5c7cd89808bd714cbca85e57fef8c72115dca1d83ff84295680b50c9 = $this->env->getExtension("native_profiler");
        $__internal_488fe03c5c7cd89808bd714cbca85e57fef8c72115dca1d83ff84295680b50c9->enter($__internal_488fe03c5c7cd89808bd714cbca85e57fef8c72115dca1d83ff84295680b50c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_488fe03c5c7cd89808bd714cbca85e57fef8c72115dca1d83ff84295680b50c9->leave($__internal_488fe03c5c7cd89808bd714cbca85e57fef8c72115dca1d83ff84295680b50c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f91bc82305c934881dfb422ce5e21fa6b26651b00715a9a287930dac3156edca = $this->env->getExtension("native_profiler");
        $__internal_f91bc82305c934881dfb422ce5e21fa6b26651b00715a9a287930dac3156edca->enter($__internal_f91bc82305c934881dfb422ce5e21fa6b26651b00715a9a287930dac3156edca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f91bc82305c934881dfb422ce5e21fa6b26651b00715a9a287930dac3156edca->leave($__internal_f91bc82305c934881dfb422ce5e21fa6b26651b00715a9a287930dac3156edca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6a167933fd5329dab9a5434112d40121213d8b2d97c39d1604fb0450051235b3 extends Twig_Template
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
        $__internal_4a3010e8f332e92fb310e7325d13129cd75d405ecf05d8e79e15006c82defa3e = $this->env->getExtension("native_profiler");
        $__internal_4a3010e8f332e92fb310e7325d13129cd75d405ecf05d8e79e15006c82defa3e->enter($__internal_4a3010e8f332e92fb310e7325d13129cd75d405ecf05d8e79e15006c82defa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a3010e8f332e92fb310e7325d13129cd75d405ecf05d8e79e15006c82defa3e->leave($__internal_4a3010e8f332e92fb310e7325d13129cd75d405ecf05d8e79e15006c82defa3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fd5998003660bb54de6d24db57c438b80c8a5da8cf47bc46b68c70389f390de = $this->env->getExtension("native_profiler");
        $__internal_5fd5998003660bb54de6d24db57c438b80c8a5da8cf47bc46b68c70389f390de->enter($__internal_5fd5998003660bb54de6d24db57c438b80c8a5da8cf47bc46b68c70389f390de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5fd5998003660bb54de6d24db57c438b80c8a5da8cf47bc46b68c70389f390de->leave($__internal_5fd5998003660bb54de6d24db57c438b80c8a5da8cf47bc46b68c70389f390de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_286145b6a29e9c36c644d99855bcd4626ec0d98ad641d8d8007012d52c196f07 = $this->env->getExtension("native_profiler");
        $__internal_286145b6a29e9c36c644d99855bcd4626ec0d98ad641d8d8007012d52c196f07->enter($__internal_286145b6a29e9c36c644d99855bcd4626ec0d98ad641d8d8007012d52c196f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_286145b6a29e9c36c644d99855bcd4626ec0d98ad641d8d8007012d52c196f07->leave($__internal_286145b6a29e9c36c644d99855bcd4626ec0d98ad641d8d8007012d52c196f07_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23bc5c99987929eca5d963c676697db961a18cc9185f696a46422487b429aa32 = $this->env->getExtension("native_profiler");
        $__internal_23bc5c99987929eca5d963c676697db961a18cc9185f696a46422487b429aa32->enter($__internal_23bc5c99987929eca5d963c676697db961a18cc9185f696a46422487b429aa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_23bc5c99987929eca5d963c676697db961a18cc9185f696a46422487b429aa32->leave($__internal_23bc5c99987929eca5d963c676697db961a18cc9185f696a46422487b429aa32_prof);

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

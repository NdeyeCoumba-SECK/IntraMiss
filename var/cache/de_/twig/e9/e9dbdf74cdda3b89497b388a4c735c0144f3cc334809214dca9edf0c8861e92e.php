<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_105fde5f3708910451b41ddae9ab50ac3bcc8a59a1ca9dba1bbcb4b2f5ac593b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c3a4b1167cb8a8fcf452f6732b3e54c86f43db45d87feff95f5bbb0c5185395 = $this->env->getExtension("native_profiler");
        $__internal_2c3a4b1167cb8a8fcf452f6732b3e54c86f43db45d87feff95f5bbb0c5185395->enter($__internal_2c3a4b1167cb8a8fcf452f6732b3e54c86f43db45d87feff95f5bbb0c5185395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2c3a4b1167cb8a8fcf452f6732b3e54c86f43db45d87feff95f5bbb0c5185395->leave($__internal_2c3a4b1167cb8a8fcf452f6732b3e54c86f43db45d87feff95f5bbb0c5185395_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

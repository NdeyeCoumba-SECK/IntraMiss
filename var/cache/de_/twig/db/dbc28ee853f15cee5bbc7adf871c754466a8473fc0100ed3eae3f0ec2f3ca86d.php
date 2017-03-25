<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_4e3abfa1e6f8edebab443f9cb90e91a5cc0b7a0efdfd1d0a6f6f7787c8548839 extends Twig_Template
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
        $__internal_33199314aac0f6a5e6909a53188a5a3d9bd3878393c826126678298c59d0eb7d = $this->env->getExtension("native_profiler");
        $__internal_33199314aac0f6a5e6909a53188a5a3d9bd3878393c826126678298c59d0eb7d->enter($__internal_33199314aac0f6a5e6909a53188a5a3d9bd3878393c826126678298c59d0eb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_33199314aac0f6a5e6909a53188a5a3d9bd3878393c826126678298c59d0eb7d->leave($__internal_33199314aac0f6a5e6909a53188a5a3d9bd3878393c826126678298c59d0eb7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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

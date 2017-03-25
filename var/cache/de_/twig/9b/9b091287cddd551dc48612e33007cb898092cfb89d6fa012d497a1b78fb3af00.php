<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_8258239c421055a95a267ce657ba4fd6a9f782a13eaa8a20c9c46e5d9d829485 extends Twig_Template
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
        $__internal_1ca98dc0a9beba73152f6b1bc4f96a7024b00998e69c7b9ebaa2703886ba29b1 = $this->env->getExtension("native_profiler");
        $__internal_1ca98dc0a9beba73152f6b1bc4f96a7024b00998e69c7b9ebaa2703886ba29b1->enter($__internal_1ca98dc0a9beba73152f6b1bc4f96a7024b00998e69c7b9ebaa2703886ba29b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1ca98dc0a9beba73152f6b1bc4f96a7024b00998e69c7b9ebaa2703886ba29b1->leave($__internal_1ca98dc0a9beba73152f6b1bc4f96a7024b00998e69c7b9ebaa2703886ba29b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */

<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_4b82667c4119edcbd565060977f51bec05886daaf2f439072e2576905fe0f9be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86d04bbf4faa2be282e378a6e3f499c484813fc14e5abeb88bc23df01252bc96 = $this->env->getExtension("native_profiler");
        $__internal_86d04bbf4faa2be282e378a6e3f499c484813fc14e5abeb88bc23df01252bc96->enter($__internal_86d04bbf4faa2be282e378a6e3f499c484813fc14e5abeb88bc23df01252bc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d04bbf4faa2be282e378a6e3f499c484813fc14e5abeb88bc23df01252bc96->leave($__internal_86d04bbf4faa2be282e378a6e3f499c484813fc14e5abeb88bc23df01252bc96_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a718fe790c587eb0074efb9b492631f277fbdb94c490833d196e2b354ab9e8f = $this->env->getExtension("native_profiler");
        $__internal_2a718fe790c587eb0074efb9b492631f277fbdb94c490833d196e2b354ab9e8f->enter($__internal_2a718fe790c587eb0074efb9b492631f277fbdb94c490833d196e2b354ab9e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2a718fe790c587eb0074efb9b492631f277fbdb94c490833d196e2b354ab9e8f->leave($__internal_2a718fe790c587eb0074efb9b492631f277fbdb94c490833d196e2b354ab9e8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

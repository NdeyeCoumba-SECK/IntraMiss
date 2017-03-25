<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_26ecef63e6449c0c4ee5cb7fab40e86f6be2cea0317b18f2a98df7e046a0e9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0967e241ae06fcd2e618634f7bca6670be514bff9161e1267f851f79b12e67d4 = $this->env->getExtension("native_profiler");
        $__internal_0967e241ae06fcd2e618634f7bca6670be514bff9161e1267f851f79b12e67d4->enter($__internal_0967e241ae06fcd2e618634f7bca6670be514bff9161e1267f851f79b12e67d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0967e241ae06fcd2e618634f7bca6670be514bff9161e1267f851f79b12e67d4->leave($__internal_0967e241ae06fcd2e618634f7bca6670be514bff9161e1267f851f79b12e67d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e9493631788df2045629c58635947dd5adff8ce92bad734f635e26f79546642 = $this->env->getExtension("native_profiler");
        $__internal_2e9493631788df2045629c58635947dd5adff8ce92bad734f635e26f79546642->enter($__internal_2e9493631788df2045629c58635947dd5adff8ce92bad734f635e26f79546642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2e9493631788df2045629c58635947dd5adff8ce92bad734f635e26f79546642->leave($__internal_2e9493631788df2045629c58635947dd5adff8ce92bad734f635e26f79546642_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

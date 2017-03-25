<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_df41d9e1cf94b7340886b03b8d95abb3b17a717dc2ea19881675afe00e0349b7 extends Twig_Template
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
        $__internal_6dee04a84ea5b3bec00d0f39fc6b65b0610a238a89640989b1f3bf264d6afa3b = $this->env->getExtension("native_profiler");
        $__internal_6dee04a84ea5b3bec00d0f39fc6b65b0610a238a89640989b1f3bf264d6afa3b->enter($__internal_6dee04a84ea5b3bec00d0f39fc6b65b0610a238a89640989b1f3bf264d6afa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"updateProfile\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6dee04a84ea5b3bec00d0f39fc6b65b0610a238a89640989b1f3bf264d6afa3b->leave($__internal_6dee04a84ea5b3bec00d0f39fc6b65b0610a238a89640989b1f3bf264d6afa3b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" id="updateProfile" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */

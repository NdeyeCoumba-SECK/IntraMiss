<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_4f331534f04a163bd02b6fff1c325505329c1e740944e54b2b8c9e9881823733 extends Twig_Template
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
        $__internal_e829cd604700bfe59bfcedc3ca78e50f7a4260d95b62749e7965413ddbc0437e = $this->env->getExtension("native_profiler");
        $__internal_e829cd604700bfe59bfcedc3ca78e50f7a4260d95b62749e7965413ddbc0437e->enter($__internal_e829cd604700bfe59bfcedc3ca78e50f7a4260d95b62749e7965413ddbc0437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

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
        
        $__internal_e829cd604700bfe59bfcedc3ca78e50f7a4260d95b62749e7965413ddbc0437e->leave($__internal_e829cd604700bfe59bfcedc3ca78e50f7a4260d95b62749e7965413ddbc0437e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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

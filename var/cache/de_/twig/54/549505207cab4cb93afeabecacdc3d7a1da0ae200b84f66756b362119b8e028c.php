<?php

/* @Ressource/Default/project.html.twig */
class __TwigTemplate_176c1718fad9adff9f21a6b704bd52d8b8a7112434dd02b1117840850cc21018 extends Twig_Template
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
        $__internal_7c2bfce7f52fd1b91c7547fd453fe9e74a51cabbd66053b57d86062a04960b37 = $this->env->getExtension("native_profiler");
        $__internal_7c2bfce7f52fd1b91c7547fd453fe9e74a51cabbd66053b57d86062a04960b37->enter($__internal_7c2bfce7f52fd1b91c7547fd453fe9e74a51cabbd66053b57d86062a04960b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ressource/Default/project.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "ddd")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"Post\" />
    </div>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_7c2bfce7f52fd1b91c7547fd453fe9e74a51cabbd66053b57d86062a04960b37->leave($__internal_7c2bfce7f52fd1b91c7547fd453fe9e74a51cabbd66053b57d86062a04960b37_prof);

    }

    public function getTemplateName()
    {
        return "@Ressource/Default/project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form, {'attr': { 'class': 'ddd' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="Post" />*/
/*     </div>*/
/* {{ form_end(form) }}*/

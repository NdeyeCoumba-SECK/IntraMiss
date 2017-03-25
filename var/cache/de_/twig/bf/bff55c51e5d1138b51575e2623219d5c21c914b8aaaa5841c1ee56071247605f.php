<?php

/* RessourceBundle:Default:project.html.twig */
class __TwigTemplate_bb90860d4a907b0f84c83a6214a8b5114a85c36b2066c01f573fe59665959993 extends Twig_Template
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
        $__internal_1f5447dc566831a1ba8fa57e5f6a2c3a3155bd1a347d89f0f4e7808b6bd88720 = $this->env->getExtension("native_profiler");
        $__internal_1f5447dc566831a1ba8fa57e5f6a2c3a3155bd1a347d89f0f4e7808b6bd88720->enter($__internal_1f5447dc566831a1ba8fa57e5f6a2c3a3155bd1a347d89f0f4e7808b6bd88720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RessourceBundle:Default:project.html.twig"));

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
        
        $__internal_1f5447dc566831a1ba8fa57e5f6a2c3a3155bd1a347d89f0f4e7808b6bd88720->leave($__internal_1f5447dc566831a1ba8fa57e5f6a2c3a3155bd1a347d89f0f4e7808b6bd88720_prof);

    }

    public function getTemplateName()
    {
        return "RessourceBundle:Default:project.html.twig";
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

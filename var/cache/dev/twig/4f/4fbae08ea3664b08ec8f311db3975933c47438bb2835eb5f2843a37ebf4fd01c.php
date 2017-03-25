<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_495399987e4a6048f91b2d7f76d97b27f079b8e9c004f0b9c5969a386ecfea89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3611d417aab9053c36a897e9733bac70e2bb766b898c1af347f7ffc7b00f8db = $this->env->getExtension("native_profiler");
        $__internal_a3611d417aab9053c36a897e9733bac70e2bb766b898c1af347f7ffc7b00f8db->enter($__internal_a3611d417aab9053c36a897e9733bac70e2bb766b898c1af347f7ffc7b00f8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3611d417aab9053c36a897e9733bac70e2bb766b898c1af347f7ffc7b00f8db->leave($__internal_a3611d417aab9053c36a897e9733bac70e2bb766b898c1af347f7ffc7b00f8db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb47610df44f994ea4ebf0294bc5d36c044443dca6fa123ac65c19935da48b1a = $this->env->getExtension("native_profiler");
        $__internal_eb47610df44f994ea4ebf0294bc5d36c044443dca6fa123ac65c19935da48b1a->enter($__internal_eb47610df44f994ea4ebf0294bc5d36c044443dca6fa123ac65c19935da48b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_eb47610df44f994ea4ebf0294bc5d36c044443dca6fa123ac65c19935da48b1a->leave($__internal_eb47610df44f994ea4ebf0294bc5d36c044443dca6fa123ac65c19935da48b1a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e16cbb7837c7dc1814f2231197e16c32d141f8890b31a1fa5e0ce7b391ba67c1 = $this->env->getExtension("native_profiler");
        $__internal_e16cbb7837c7dc1814f2231197e16c32d141f8890b31a1fa5e0ce7b391ba67c1->enter($__internal_e16cbb7837c7dc1814f2231197e16c32d141f8890b31a1fa5e0ce7b391ba67c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e16cbb7837c7dc1814f2231197e16c32d141f8890b31a1fa5e0ce7b391ba67c1->leave($__internal_e16cbb7837c7dc1814f2231197e16c32d141f8890b31a1fa5e0ce7b391ba67c1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_667ad0af609a38e022a14927be60f98d20626e9ef6a30e0ff910d27cda5cffc1 = $this->env->getExtension("native_profiler");
        $__internal_667ad0af609a38e022a14927be60f98d20626e9ef6a30e0ff910d27cda5cffc1->enter($__internal_667ad0af609a38e022a14927be60f98d20626e9ef6a30e0ff910d27cda5cffc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_667ad0af609a38e022a14927be60f98d20626e9ef6a30e0ff910d27cda5cffc1->leave($__internal_667ad0af609a38e022a14927be60f98d20626e9ef6a30e0ff910d27cda5cffc1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

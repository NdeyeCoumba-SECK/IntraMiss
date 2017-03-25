<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12ea03da67d985342dd18b139045f8d20e899455edefe238fcb769be7d69ba6e extends Twig_Template
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
        $__internal_cdfcddd87d3b8c4498b61320f4926ebf39b17a24f5ca4512ba1d18d99ef61b39 = $this->env->getExtension("native_profiler");
        $__internal_cdfcddd87d3b8c4498b61320f4926ebf39b17a24f5ca4512ba1d18d99ef61b39->enter($__internal_cdfcddd87d3b8c4498b61320f4926ebf39b17a24f5ca4512ba1d18d99ef61b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfcddd87d3b8c4498b61320f4926ebf39b17a24f5ca4512ba1d18d99ef61b39->leave($__internal_cdfcddd87d3b8c4498b61320f4926ebf39b17a24f5ca4512ba1d18d99ef61b39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b31180bc566315a4e86e801da6cb4a1064992dbea5ee43f9518460ef3f55130d = $this->env->getExtension("native_profiler");
        $__internal_b31180bc566315a4e86e801da6cb4a1064992dbea5ee43f9518460ef3f55130d->enter($__internal_b31180bc566315a4e86e801da6cb4a1064992dbea5ee43f9518460ef3f55130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b31180bc566315a4e86e801da6cb4a1064992dbea5ee43f9518460ef3f55130d->leave($__internal_b31180bc566315a4e86e801da6cb4a1064992dbea5ee43f9518460ef3f55130d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c19afddc35ca3a992d2b55dd199836d0e46df2df5c199908a82bf53efc45514 = $this->env->getExtension("native_profiler");
        $__internal_8c19afddc35ca3a992d2b55dd199836d0e46df2df5c199908a82bf53efc45514->enter($__internal_8c19afddc35ca3a992d2b55dd199836d0e46df2df5c199908a82bf53efc45514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8c19afddc35ca3a992d2b55dd199836d0e46df2df5c199908a82bf53efc45514->leave($__internal_8c19afddc35ca3a992d2b55dd199836d0e46df2df5c199908a82bf53efc45514_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21b6cebea3649a62b09d3972ad113f5cc3d081f9d7ff0d8f92527e94dff88376 = $this->env->getExtension("native_profiler");
        $__internal_21b6cebea3649a62b09d3972ad113f5cc3d081f9d7ff0d8f92527e94dff88376->enter($__internal_21b6cebea3649a62b09d3972ad113f5cc3d081f9d7ff0d8f92527e94dff88376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_21b6cebea3649a62b09d3972ad113f5cc3d081f9d7ff0d8f92527e94dff88376->leave($__internal_21b6cebea3649a62b09d3972ad113f5cc3d081f9d7ff0d8f92527e94dff88376_prof);

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

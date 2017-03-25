<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_69bd447b26e0bf7023d8e6cd0332f7d6893469ba7d1f7a26fad5cfc2e16b9c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bd3331913f9207e11584d518c1964a34454bcf82b7870ba12941191c6d611e1f = $this->env->getExtension("native_profiler");
        $__internal_bd3331913f9207e11584d518c1964a34454bcf82b7870ba12941191c6d611e1f->enter($__internal_bd3331913f9207e11584d518c1964a34454bcf82b7870ba12941191c6d611e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd3331913f9207e11584d518c1964a34454bcf82b7870ba12941191c6d611e1f->leave($__internal_bd3331913f9207e11584d518c1964a34454bcf82b7870ba12941191c6d611e1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5295bbc6e10d08b74d9451508c9e8cd106e813ddb3cf1306e256e324bc07bb9 = $this->env->getExtension("native_profiler");
        $__internal_f5295bbc6e10d08b74d9451508c9e8cd106e813ddb3cf1306e256e324bc07bb9->enter($__internal_f5295bbc6e10d08b74d9451508c9e8cd106e813ddb3cf1306e256e324bc07bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5295bbc6e10d08b74d9451508c9e8cd106e813ddb3cf1306e256e324bc07bb9->leave($__internal_f5295bbc6e10d08b74d9451508c9e8cd106e813ddb3cf1306e256e324bc07bb9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57cd981f49a7a03c985e423a1e59fc3e7021cf9dde6be32f96de3256a0991aab = $this->env->getExtension("native_profiler");
        $__internal_57cd981f49a7a03c985e423a1e59fc3e7021cf9dde6be32f96de3256a0991aab->enter($__internal_57cd981f49a7a03c985e423a1e59fc3e7021cf9dde6be32f96de3256a0991aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57cd981f49a7a03c985e423a1e59fc3e7021cf9dde6be32f96de3256a0991aab->leave($__internal_57cd981f49a7a03c985e423a1e59fc3e7021cf9dde6be32f96de3256a0991aab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01eb37fe76ef15206a0f51fe027fa1bf12f5b251764b68934fce80b11bf0419d = $this->env->getExtension("native_profiler");
        $__internal_01eb37fe76ef15206a0f51fe027fa1bf12f5b251764b68934fce80b11bf0419d->enter($__internal_01eb37fe76ef15206a0f51fe027fa1bf12f5b251764b68934fce80b11bf0419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01eb37fe76ef15206a0f51fe027fa1bf12f5b251764b68934fce80b11bf0419d->leave($__internal_01eb37fe76ef15206a0f51fe027fa1bf12f5b251764b68934fce80b11bf0419d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

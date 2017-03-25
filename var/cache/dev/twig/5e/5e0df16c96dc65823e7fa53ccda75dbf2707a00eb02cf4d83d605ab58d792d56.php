<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33afb6f3798e467c591b5abb0fdf5025efeeac144a263a445ff1dd7b25710344 extends Twig_Template
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
        $__internal_7ab7ea6b628aac2d76c0ba8efc971ec1ab68f7ed03c0b8372dd285b2a462846e = $this->env->getExtension("native_profiler");
        $__internal_7ab7ea6b628aac2d76c0ba8efc971ec1ab68f7ed03c0b8372dd285b2a462846e->enter($__internal_7ab7ea6b628aac2d76c0ba8efc971ec1ab68f7ed03c0b8372dd285b2a462846e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ab7ea6b628aac2d76c0ba8efc971ec1ab68f7ed03c0b8372dd285b2a462846e->leave($__internal_7ab7ea6b628aac2d76c0ba8efc971ec1ab68f7ed03c0b8372dd285b2a462846e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20866b1f56556b1ea64de0ae1b923b52afc331b1edf80a04cf85aa328795fcf8 = $this->env->getExtension("native_profiler");
        $__internal_20866b1f56556b1ea64de0ae1b923b52afc331b1edf80a04cf85aa328795fcf8->enter($__internal_20866b1f56556b1ea64de0ae1b923b52afc331b1edf80a04cf85aa328795fcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20866b1f56556b1ea64de0ae1b923b52afc331b1edf80a04cf85aa328795fcf8->leave($__internal_20866b1f56556b1ea64de0ae1b923b52afc331b1edf80a04cf85aa328795fcf8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6352c4935f8927c9c8b8e572f9a8021170d24c5ef3f402c325b5e03010417ae1 = $this->env->getExtension("native_profiler");
        $__internal_6352c4935f8927c9c8b8e572f9a8021170d24c5ef3f402c325b5e03010417ae1->enter($__internal_6352c4935f8927c9c8b8e572f9a8021170d24c5ef3f402c325b5e03010417ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6352c4935f8927c9c8b8e572f9a8021170d24c5ef3f402c325b5e03010417ae1->leave($__internal_6352c4935f8927c9c8b8e572f9a8021170d24c5ef3f402c325b5e03010417ae1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cd24b50524155ce7aab88f87d0b30b957b0bcca80d4e62580ac71bc196cb446 = $this->env->getExtension("native_profiler");
        $__internal_6cd24b50524155ce7aab88f87d0b30b957b0bcca80d4e62580ac71bc196cb446->enter($__internal_6cd24b50524155ce7aab88f87d0b30b957b0bcca80d4e62580ac71bc196cb446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6cd24b50524155ce7aab88f87d0b30b957b0bcca80d4e62580ac71bc196cb446->leave($__internal_6cd24b50524155ce7aab88f87d0b30b957b0bcca80d4e62580ac71bc196cb446_prof);

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

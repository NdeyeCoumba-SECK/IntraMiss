<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f89c1263fc542214bd94ee3e003764c2bd364e6cd7b8d4d94242a729d82eeb62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9c260c3637d48285db5a575b574082b62b4cdc4dc768ea444be09d857fdbf53 = $this->env->getExtension("native_profiler");
        $__internal_e9c260c3637d48285db5a575b574082b62b4cdc4dc768ea444be09d857fdbf53->enter($__internal_e9c260c3637d48285db5a575b574082b62b4cdc4dc768ea444be09d857fdbf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e9c260c3637d48285db5a575b574082b62b4cdc4dc768ea444be09d857fdbf53->leave($__internal_e9c260c3637d48285db5a575b574082b62b4cdc4dc768ea444be09d857fdbf53_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_412cd1d1d532059a1a8a924dceed826cb80f2ee032d49dc4c33309c51aa51b03 = $this->env->getExtension("native_profiler");
        $__internal_412cd1d1d532059a1a8a924dceed826cb80f2ee032d49dc4c33309c51aa51b03->enter($__internal_412cd1d1d532059a1a8a924dceed826cb80f2ee032d49dc4c33309c51aa51b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_412cd1d1d532059a1a8a924dceed826cb80f2ee032d49dc4c33309c51aa51b03->leave($__internal_412cd1d1d532059a1a8a924dceed826cb80f2ee032d49dc4c33309c51aa51b03_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

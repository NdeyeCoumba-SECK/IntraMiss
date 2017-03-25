<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dcfd8bd53b3c9dc264d20c5d0aac68ce0157fec1e6a94e3d80def045cf761a10 extends Twig_Template
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
        $__internal_e9cd6bb41d01885ffaa596464d82ecf0033851b3fb479a665523ce185c6553f6 = $this->env->getExtension("native_profiler");
        $__internal_e9cd6bb41d01885ffaa596464d82ecf0033851b3fb479a665523ce185c6553f6->enter($__internal_e9cd6bb41d01885ffaa596464d82ecf0033851b3fb479a665523ce185c6553f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e9cd6bb41d01885ffaa596464d82ecf0033851b3fb479a665523ce185c6553f6->leave($__internal_e9cd6bb41d01885ffaa596464d82ecf0033851b3fb479a665523ce185c6553f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

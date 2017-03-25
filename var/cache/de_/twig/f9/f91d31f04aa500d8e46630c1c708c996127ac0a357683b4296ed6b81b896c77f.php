<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cf273f098f154365b22c71c7e9fbda4fac9bb433949f1ce956de976b98057767 extends Twig_Template
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
        $__internal_f662381a639862ee5ffdac566fbbbd58181bdf39bc2649568d85047fda113b55 = $this->env->getExtension("native_profiler");
        $__internal_f662381a639862ee5ffdac566fbbbd58181bdf39bc2649568d85047fda113b55->enter($__internal_f662381a639862ee5ffdac566fbbbd58181bdf39bc2649568d85047fda113b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f662381a639862ee5ffdac566fbbbd58181bdf39bc2649568d85047fda113b55->leave($__internal_f662381a639862ee5ffdac566fbbbd58181bdf39bc2649568d85047fda113b55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

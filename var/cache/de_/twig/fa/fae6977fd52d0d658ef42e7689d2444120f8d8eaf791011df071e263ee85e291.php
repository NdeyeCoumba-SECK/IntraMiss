<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1e60751bdd8561146e134c7867f496592b801135eb1bf98227d13514a1a5d990 extends Twig_Template
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
        $__internal_69df143ae57907da528fa5dc131d400c502dfcd01d7a3a00404768c1b0e0e2ca = $this->env->getExtension("native_profiler");
        $__internal_69df143ae57907da528fa5dc131d400c502dfcd01d7a3a00404768c1b0e0e2ca->enter($__internal_69df143ae57907da528fa5dc131d400c502dfcd01d7a3a00404768c1b0e0e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_69df143ae57907da528fa5dc131d400c502dfcd01d7a3a00404768c1b0e0e2ca->leave($__internal_69df143ae57907da528fa5dc131d400c502dfcd01d7a3a00404768c1b0e0e2ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

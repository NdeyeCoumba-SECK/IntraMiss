<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6ee7ff43e02475566682e42037a213fde6caa37b407417c0492dd3430c3a7788 extends Twig_Template
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
        $__internal_07d54170fb06091964ffd4b9a38be4c3ab7ec5bd5bb2f511aefb20d116534ebd = $this->env->getExtension("native_profiler");
        $__internal_07d54170fb06091964ffd4b9a38be4c3ab7ec5bd5bb2f511aefb20d116534ebd->enter($__internal_07d54170fb06091964ffd4b9a38be4c3ab7ec5bd5bb2f511aefb20d116534ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_07d54170fb06091964ffd4b9a38be4c3ab7ec5bd5bb2f511aefb20d116534ebd->leave($__internal_07d54170fb06091964ffd4b9a38be4c3ab7ec5bd5bb2f511aefb20d116534ebd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

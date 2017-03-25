<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_84049b759232d08d07d2aeb8e458507091181b718ac8bbff3e0b9eabfbf42a07 extends Twig_Template
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
        $__internal_a55410a1aa89894bf775f6b77e113f9b403fa36b1961ab9a75b1ed816793a9e7 = $this->env->getExtension("native_profiler");
        $__internal_a55410a1aa89894bf775f6b77e113f9b403fa36b1961ab9a75b1ed816793a9e7->enter($__internal_a55410a1aa89894bf775f6b77e113f9b403fa36b1961ab9a75b1ed816793a9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a55410a1aa89894bf775f6b77e113f9b403fa36b1961ab9a75b1ed816793a9e7->leave($__internal_a55410a1aa89894bf775f6b77e113f9b403fa36b1961ab9a75b1ed816793a9e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

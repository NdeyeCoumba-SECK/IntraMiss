<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ceb8cdcff9d11c7fdcab83de21c6e611f50d93ec16d5665e62d853b1cdaa64af extends Twig_Template
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
        $__internal_2a2fe709e00b829be70bdaa8995cd5dfc8752180d8f1d990f5dc25a1d8a535dd = $this->env->getExtension("native_profiler");
        $__internal_2a2fe709e00b829be70bdaa8995cd5dfc8752180d8f1d990f5dc25a1d8a535dd->enter($__internal_2a2fe709e00b829be70bdaa8995cd5dfc8752180d8f1d990f5dc25a1d8a535dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2a2fe709e00b829be70bdaa8995cd5dfc8752180d8f1d990f5dc25a1d8a535dd->leave($__internal_2a2fe709e00b829be70bdaa8995cd5dfc8752180d8f1d990f5dc25a1d8a535dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

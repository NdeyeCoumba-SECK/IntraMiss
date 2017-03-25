<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9a92b929b4b47c1b76e7130fcda7e96f5321d66a9bfbf8c70629c326defd5f72 extends Twig_Template
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
        $__internal_211fec3026d88ffca0551f5c6b19295c08ffe74c58911c907bb8c7aaaecccb0d = $this->env->getExtension("native_profiler");
        $__internal_211fec3026d88ffca0551f5c6b19295c08ffe74c58911c907bb8c7aaaecccb0d->enter($__internal_211fec3026d88ffca0551f5c6b19295c08ffe74c58911c907bb8c7aaaecccb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_211fec3026d88ffca0551f5c6b19295c08ffe74c58911c907bb8c7aaaecccb0d->leave($__internal_211fec3026d88ffca0551f5c6b19295c08ffe74c58911c907bb8c7aaaecccb0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

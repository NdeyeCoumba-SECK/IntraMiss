<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_49c49150e4d46ee997271549d06bb05605fb153edbbcea5ee31652942f234881 extends Twig_Template
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
        $__internal_db3ffd18e34a6f0f6d1e782b5516da9aad11d2011be869f1f3531db937e4fcac = $this->env->getExtension("native_profiler");
        $__internal_db3ffd18e34a6f0f6d1e782b5516da9aad11d2011be869f1f3531db937e4fcac->enter($__internal_db3ffd18e34a6f0f6d1e782b5516da9aad11d2011be869f1f3531db937e4fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_db3ffd18e34a6f0f6d1e782b5516da9aad11d2011be869f1f3531db937e4fcac->leave($__internal_db3ffd18e34a6f0f6d1e782b5516da9aad11d2011be869f1f3531db937e4fcac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

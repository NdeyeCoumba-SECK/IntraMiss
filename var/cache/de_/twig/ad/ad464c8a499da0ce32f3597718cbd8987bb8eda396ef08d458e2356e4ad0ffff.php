<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2bc3dbf87b8c6ec4b77af6bc96b45e35ec150025f732994abc63f9bbfae7c388 extends Twig_Template
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
        $__internal_4fcf75bbf45832dfe43ed3e4bcb5c86321a5ada6768c7c9b722f5641df85715f = $this->env->getExtension("native_profiler");
        $__internal_4fcf75bbf45832dfe43ed3e4bcb5c86321a5ada6768c7c9b722f5641df85715f->enter($__internal_4fcf75bbf45832dfe43ed3e4bcb5c86321a5ada6768c7c9b722f5641df85715f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4fcf75bbf45832dfe43ed3e4bcb5c86321a5ada6768c7c9b722f5641df85715f->leave($__internal_4fcf75bbf45832dfe43ed3e4bcb5c86321a5ada6768c7c9b722f5641df85715f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ad76d1448266d23f710151a9a6381cea5b1230324c04f6ff3e26898887bd7bdf extends Twig_Template
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
        $__internal_d293c5eca6004112cf39e26dcdb1eb01b314ff87f628dcdc7fb1e195749543be = $this->env->getExtension("native_profiler");
        $__internal_d293c5eca6004112cf39e26dcdb1eb01b314ff87f628dcdc7fb1e195749543be->enter($__internal_d293c5eca6004112cf39e26dcdb1eb01b314ff87f628dcdc7fb1e195749543be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d293c5eca6004112cf39e26dcdb1eb01b314ff87f628dcdc7fb1e195749543be->leave($__internal_d293c5eca6004112cf39e26dcdb1eb01b314ff87f628dcdc7fb1e195749543be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
